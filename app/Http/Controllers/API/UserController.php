<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\User;
use App\Team;
use DB;

class UserController extends Controller
{
    public function sendSuccess($result, $msg) 
    {
    	$response = [
            'success' => true,
            'data'    => $result,
            'message' => $msg,
        ];

        return response()->json($response, 200);
    }


    public function sendError($error, $errMsg = [], $code = 404) 
    {
    	$response = [
            'success' => false,
            'message' => $error,
        ];

        if( ! empty($errMsg)) {
            $response['data'] = $errMsg;
        }

        return response()->json($response, $code);
    }


    public function showTeams() 
    {
        $teams = DB::table('tbl_teams')
                    ->where('is_active', 1)
                    ->get();

        if($teams->count() > 0) {
            return $this->sendSuccess($teams->toArray(), 'Teams retrieved successfully.');
        } else {
            return $this->sendError('No Data', 'Team not found.', 204);
        }
    }


    public function showPlayers($teamId) 
    {
        $players = DB::table('tbl_players')
                        ->join('tbl_team_players', 'tbl_players.id', '=', 'tbl_team_players.player_id')
                        ->join('tbl_teams', 'tbl_teams.id', '=', 'tbl_team_players.team_id')
                        ->where('tbl_team_players.team_id', '=', $teamId)
                        ->select('tbl_players.*', 'tbl_teams.name as team_name', 'tbl_teams.id as team_id')
                        ->get();

        if($players->count() > 0) {
            return $this->sendSuccess($players->toArray(), 'Teams retrieved successfully.');
        } else {
            return $this->sendError('No Data', 'Team not found.', 204);
        }
    }


    public function showMatches($teamId) 
    {
        $matches = DB::table('tbl_matches')
                        ->leftjoin('tbl_teams as a', 'a.id', '=', 'tbl_matches.team_a_id')
                        ->leftjoin('tbl_teams as b', 'b.id', '=', 'tbl_matches.team_b_id')
                        ->leftjoin('tbl_teams as c', 'c.id', '=', 'tbl_matches.winner_id')
                        ->where('tbl_matches.team_a_id', '=', $teamId)
                        ->orWhere('tbl_matches.team_b_id', '=', $teamId)
                        ->orWhere('tbl_matches.winner_id', '=', $teamId)
                        ->selectRaw('a.name as teamA, b.name as teamB, tbl_matches.is_draw, 
                            date(tbl_matches.played_on) as played_on, c.name as winner')
                        ->get();

        if($matches->count() > 0) {
            return $this->sendSuccess($matches->toArray(), 'Matches retrieved successfully.');
        } else {
            return $this->sendError('No Data', 'Matches not found.', 204);
        }
    }


    public function showPoints() 
    {
        $players = DB::table('tbl_points')
                        ->join('tbl_teams', 'tbl_points.team_id', '=', 'tbl_teams.id')
                        ->select('tbl_teams.name', 'tbl_teams.logo_url', 'tbl_points.points',
                            'tbl_points.won', 'tbl_points.lost', 'tbl_points.draw')
                        ->orderBy('points', 'desc')
                        ->get();

        if($players->count() > 0) {
            return $this->sendSuccess($players->toArray(), 'Points retrieved successfully.');
        } else {
            return $this->sendError('No Data', 'Points table not found.', 204);
        }
    }


    public function generateMatchFixture()
    {
        $teams = DB::table('tbl_teams')
                    ->where('is_active', 1)
                    ->select('id')
                    ->get();
        
        if($teams->count() > 0) {
            $insertArr = array();
            for($pos = 0; $pos < $teams->count(); $pos++) {
                $teamAId = $teams[$pos]->id;
                $temp_team = (array) $teams;
                $restteams = array_shift($temp_team);
                for($restpos = $pos+1; $restpos < count($restteams); $restpos++) {
                    $teamBId = $restteams[$restpos]->id;
                    $is_draw = rand(0, 1);
                    $insertArr[] = array(
                                            'team_a_id' => $teamAId, 
                                            'team_b_id' => $teamBId,
                                            'is_draw' => $is_draw,
                                            'winner_id' => $is_draw ? 0 : (rand(0, 1) ? $teamAId : $teamBId)
                                        );
                }
            }

            try {
                // empty fixtures
                DB::table('tbl_matches')->truncate();
                // re-insert fixture values
                DB::table('tbl_matches')->insert($insertArr);

                if($this->fillPointTable($teams)) {
                    return $this->sendSuccess('Database Insert Success', 'Match fixers changed.');
                } else {
                    return $this->sendError('Database Insert Error', 'Match fixers can not be changed.');
                }
            } catch(Exception $e) {

                return $this->sendError('Database Insert Error', 'Match fixers can not be changed.');
            }
        }
    }

    protected function fillPointTable($teams)
    {
        $points_obj = DB::table('tbl_point_master')
                                ->select('type', 'points')
                                ->get();

        $pointTypeArr = array();
        foreach($points_obj as $point) {
            $pointTypeArr[$point->type] = $point->points;
        }

        $pointsArr = array();
        // update points table
        for($pos = 0; $pos < $teams->count(); $pos++) {
            $teamId = $teams[$pos]->id;
            $win_count = DB::table('tbl_matches')
                            ->where('winner_id', $teamId)
                            ->count();
            
            $draw_count = DB::table('tbl_matches')
                            ->whereRaw('(is_draw = ?) AND (team_a_id = ? OR team_b_id = ?)', [1, $teamId, $teamId])
                            ->count();

            $loss_count = DB::table('tbl_matches')
                            ->whereRaw('(is_draw = ?) AND (team_a_id = ? OR team_b_id = ?) AND (winner_id <> ?)', [0, $teamId, $teamId, $teamId])
                            ->count();

            $pointsArr[] = array(
                                    'team_id' => $teamId,
                                    'won' => $win_count,
                                    'draw' => $draw_count,
                                    'lost' => $loss_count,
                                    'points' => ($win_count * $pointTypeArr['win']) + ($draw_count * $pointTypeArr['draw'])
                                );
        }

        try {
            // empty points table
            DB::table('tbl_points')->truncate();
            // re-insert points values
            DB::table('tbl_points')->insert($pointsArr);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }


    public function showPlayerDetails($playerId) 
    {
        $playerDtls = DB::table('tbl_players')
                        ->join('tbl_team_players', 'tbl_players.id', '=', 'tbl_team_players.player_id')
                        ->join('tbl_teams', 'tbl_teams.id', '=', 'tbl_team_players.team_id')
                        ->join('tbl_states', 'tbl_states.id', '=', 'tbl_players.state_id')
                        ->join('tbl_countries', 'tbl_countries.id', '=', 'tbl_players.country_id')
                        ->where('tbl_players.id', '=', $playerId)
                        ->where('tbl_teams.is_active', '=', 1)
                        ->where('tbl_team_players.is_active', '=', 1)
                        ->selectRaw('tbl_players.*, tbl_teams.name as team_name, tbl_teams.logo_url as team_logo, 
                            tbl_states.name as player_state, tbl_countries.name as player_country')
                        ->get();

        if($playerDtls->count() > 0) {
            return $this->sendSuccess($playerDtls->toArray(), 'Player details retrieved successfully.');
        } else {
            return $this->sendError('No Data', 'Team not found.', 204);
        }
    }


    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);

        if($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('MyApp')->accessToken;
        $success['name'] =  $user->name;
        return $this->sendSuccess($success, 'User register successfully.');
    }
}
