<?php

use Illuminate\Database\Seeder;

class TblCountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_countries')->delete();
        
        \DB::table('tbl_countries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'short_name' => 'AF',
                'name' => 'Afghanistan',
                'phone_code' => '93',
            ),
            1 => 
            array (
                'id' => 2,
                'short_name' => 'AL',
                'name' => 'Albania',
                'phone_code' => '355',
            ),
            2 => 
            array (
                'id' => 3,
                'short_name' => 'DZ',
                'name' => 'Algeria',
                'phone_code' => '213',
            ),
            3 => 
            array (
                'id' => 4,
                'short_name' => 'AS',
                'name' => 'American Samoa',
                'phone_code' => '1684',
            ),
            4 => 
            array (
                'id' => 5,
                'short_name' => 'AD',
                'name' => 'Andorra',
                'phone_code' => '376',
            ),
            5 => 
            array (
                'id' => 6,
                'short_name' => 'AO',
                'name' => 'Angola',
                'phone_code' => '244',
            ),
            6 => 
            array (
                'id' => 7,
                'short_name' => 'AI',
                'name' => 'Anguilla',
                'phone_code' => '1264',
            ),
            7 => 
            array (
                'id' => 8,
                'short_name' => 'AQ',
                'name' => 'Antarctica',
                'phone_code' => '0',
            ),
            8 => 
            array (
                'id' => 9,
                'short_name' => 'AG',
                'name' => 'Antigua And Barbuda',
                'phone_code' => '1268',
            ),
            9 => 
            array (
                'id' => 10,
                'short_name' => 'AR',
                'name' => 'Argentina',
                'phone_code' => '54',
            ),
            10 => 
            array (
                'id' => 11,
                'short_name' => 'AM',
                'name' => 'Armenia',
                'phone_code' => '374',
            ),
            11 => 
            array (
                'id' => 12,
                'short_name' => 'AW',
                'name' => 'Aruba',
                'phone_code' => '297',
            ),
            12 => 
            array (
                'id' => 13,
                'short_name' => 'AU',
                'name' => 'Australia',
                'phone_code' => '61',
            ),
            13 => 
            array (
                'id' => 14,
                'short_name' => 'AT',
                'name' => 'Austria',
                'phone_code' => '43',
            ),
            14 => 
            array (
                'id' => 15,
                'short_name' => 'AZ',
                'name' => 'Azerbaijan',
                'phone_code' => '994',
            ),
            15 => 
            array (
                'id' => 16,
                'short_name' => 'BS',
                'name' => 'Bahamas The',
                'phone_code' => '1242',
            ),
            16 => 
            array (
                'id' => 17,
                'short_name' => 'BH',
                'name' => 'Bahrain',
                'phone_code' => '973',
            ),
            17 => 
            array (
                'id' => 18,
                'short_name' => 'BD',
                'name' => 'Bangladesh',
                'phone_code' => '880',
            ),
            18 => 
            array (
                'id' => 19,
                'short_name' => 'BB',
                'name' => 'Barbados',
                'phone_code' => '1246',
            ),
            19 => 
            array (
                'id' => 20,
                'short_name' => 'BY',
                'name' => 'Belarus',
                'phone_code' => '375',
            ),
            20 => 
            array (
                'id' => 21,
                'short_name' => 'BE',
                'name' => 'Belgium',
                'phone_code' => '32',
            ),
            21 => 
            array (
                'id' => 22,
                'short_name' => 'BZ',
                'name' => 'Belize',
                'phone_code' => '501',
            ),
            22 => 
            array (
                'id' => 23,
                'short_name' => 'BJ',
                'name' => 'Benin',
                'phone_code' => '229',
            ),
            23 => 
            array (
                'id' => 24,
                'short_name' => 'BM',
                'name' => 'Bermuda',
                'phone_code' => '1441',
            ),
            24 => 
            array (
                'id' => 25,
                'short_name' => 'BT',
                'name' => 'Bhutan',
                'phone_code' => '975',
            ),
            25 => 
            array (
                'id' => 26,
                'short_name' => 'BO',
                'name' => 'Bolivia',
                'phone_code' => '591',
            ),
            26 => 
            array (
                'id' => 27,
                'short_name' => 'BA',
                'name' => 'Bosnia and Herzegovina',
                'phone_code' => '387',
            ),
            27 => 
            array (
                'id' => 28,
                'short_name' => 'BW',
                'name' => 'Botswana',
                'phone_code' => '267',
            ),
            28 => 
            array (
                'id' => 29,
                'short_name' => 'BV',
                'name' => 'Bouvet Island',
                'phone_code' => '0',
            ),
            29 => 
            array (
                'id' => 30,
                'short_name' => 'BR',
                'name' => 'Brazil',
                'phone_code' => '55',
            ),
            30 => 
            array (
                'id' => 31,
                'short_name' => 'IO',
                'name' => 'British Indian Ocean Territory',
                'phone_code' => '246',
            ),
            31 => 
            array (
                'id' => 32,
                'short_name' => 'BN',
                'name' => 'Brunei',
                'phone_code' => '673',
            ),
            32 => 
            array (
                'id' => 33,
                'short_name' => 'BG',
                'name' => 'Bulgaria',
                'phone_code' => '359',
            ),
            33 => 
            array (
                'id' => 34,
                'short_name' => 'BF',
                'name' => 'Burkina Faso',
                'phone_code' => '226',
            ),
            34 => 
            array (
                'id' => 35,
                'short_name' => 'BI',
                'name' => 'Burundi',
                'phone_code' => '257',
            ),
            35 => 
            array (
                'id' => 36,
                'short_name' => 'KH',
                'name' => 'Cambodia',
                'phone_code' => '855',
            ),
            36 => 
            array (
                'id' => 37,
                'short_name' => 'CM',
                'name' => 'Cameroon',
                'phone_code' => '237',
            ),
            37 => 
            array (
                'id' => 38,
                'short_name' => 'CA',
                'name' => 'Canada',
                'phone_code' => '1',
            ),
            38 => 
            array (
                'id' => 39,
                'short_name' => 'CV',
                'name' => 'Cape Verde',
                'phone_code' => '238',
            ),
            39 => 
            array (
                'id' => 40,
                'short_name' => 'KY',
                'name' => 'Cayman Islands',
                'phone_code' => '1345',
            ),
            40 => 
            array (
                'id' => 41,
                'short_name' => 'CF',
                'name' => 'Central African Republic',
                'phone_code' => '236',
            ),
            41 => 
            array (
                'id' => 42,
                'short_name' => 'TD',
                'name' => 'Chad',
                'phone_code' => '235',
            ),
            42 => 
            array (
                'id' => 43,
                'short_name' => 'CL',
                'name' => 'Chile',
                'phone_code' => '56',
            ),
            43 => 
            array (
                'id' => 44,
                'short_name' => 'CN',
                'name' => 'China',
                'phone_code' => '86',
            ),
            44 => 
            array (
                'id' => 45,
                'short_name' => 'CX',
                'name' => 'Christmas Island',
                'phone_code' => '61',
            ),
            45 => 
            array (
                'id' => 46,
                'short_name' => 'CC',
            'name' => 'Cocos (Keeling) Islands',
                'phone_code' => '672',
            ),
            46 => 
            array (
                'id' => 47,
                'short_name' => 'CO',
                'name' => 'Colombia',
                'phone_code' => '57',
            ),
            47 => 
            array (
                'id' => 48,
                'short_name' => 'KM',
                'name' => 'Comoros',
                'phone_code' => '269',
            ),
            48 => 
            array (
                'id' => 49,
                'short_name' => 'CG',
                'name' => 'Republic Of The Congo',
                'phone_code' => '242',
            ),
            49 => 
            array (
                'id' => 50,
                'short_name' => 'CD',
                'name' => 'Democratic Republic Of The Congo',
                'phone_code' => '242',
            ),
            50 => 
            array (
                'id' => 51,
                'short_name' => 'CK',
                'name' => 'Cook Islands',
                'phone_code' => '682',
            ),
            51 => 
            array (
                'id' => 52,
                'short_name' => 'CR',
                'name' => 'Costa Rica',
                'phone_code' => '506',
            ),
            52 => 
            array (
                'id' => 53,
                'short_name' => 'CI',
            'name' => 'Cote D\'Ivoire (Ivory Coast)',
                'phone_code' => '225',
            ),
            53 => 
            array (
                'id' => 54,
                'short_name' => 'HR',
            'name' => 'Croatia (Hrvatska)',
                'phone_code' => '385',
            ),
            54 => 
            array (
                'id' => 55,
                'short_name' => 'CU',
                'name' => 'Cuba',
                'phone_code' => '53',
            ),
            55 => 
            array (
                'id' => 56,
                'short_name' => 'CY',
                'name' => 'Cyprus',
                'phone_code' => '357',
            ),
            56 => 
            array (
                'id' => 57,
                'short_name' => 'CZ',
                'name' => 'Czech Republic',
                'phone_code' => '420',
            ),
            57 => 
            array (
                'id' => 58,
                'short_name' => 'DK',
                'name' => 'Denmark',
                'phone_code' => '45',
            ),
            58 => 
            array (
                'id' => 59,
                'short_name' => 'DJ',
                'name' => 'Djibouti',
                'phone_code' => '253',
            ),
            59 => 
            array (
                'id' => 60,
                'short_name' => 'DM',
                'name' => 'Dominica',
                'phone_code' => '1767',
            ),
            60 => 
            array (
                'id' => 61,
                'short_name' => 'DO',
                'name' => 'Dominican Republic',
                'phone_code' => '1809',
            ),
            61 => 
            array (
                'id' => 62,
                'short_name' => 'TP',
                'name' => 'East Timor',
                'phone_code' => '670',
            ),
            62 => 
            array (
                'id' => 63,
                'short_name' => 'EC',
                'name' => 'Ecuador',
                'phone_code' => '593',
            ),
            63 => 
            array (
                'id' => 64,
                'short_name' => 'EG',
                'name' => 'Egypt',
                'phone_code' => '20',
            ),
            64 => 
            array (
                'id' => 65,
                'short_name' => 'SV',
                'name' => 'El Salvador',
                'phone_code' => '503',
            ),
            65 => 
            array (
                'id' => 66,
                'short_name' => 'GQ',
                'name' => 'Equatorial Guinea',
                'phone_code' => '240',
            ),
            66 => 
            array (
                'id' => 67,
                'short_name' => 'ER',
                'name' => 'Eritrea',
                'phone_code' => '291',
            ),
            67 => 
            array (
                'id' => 68,
                'short_name' => 'EE',
                'name' => 'Estonia',
                'phone_code' => '372',
            ),
            68 => 
            array (
                'id' => 69,
                'short_name' => 'ET',
                'name' => 'Ethiopia',
                'phone_code' => '251',
            ),
            69 => 
            array (
                'id' => 70,
                'short_name' => 'XA',
                'name' => 'External Territories of Australia',
                'phone_code' => '61',
            ),
            70 => 
            array (
                'id' => 71,
                'short_name' => 'FK',
                'name' => 'Falkland Islands',
                'phone_code' => '500',
            ),
            71 => 
            array (
                'id' => 72,
                'short_name' => 'FO',
                'name' => 'Faroe Islands',
                'phone_code' => '298',
            ),
            72 => 
            array (
                'id' => 73,
                'short_name' => 'FJ',
                'name' => 'Fiji Islands',
                'phone_code' => '679',
            ),
            73 => 
            array (
                'id' => 74,
                'short_name' => 'FI',
                'name' => 'Finland',
                'phone_code' => '358',
            ),
            74 => 
            array (
                'id' => 75,
                'short_name' => 'FR',
                'name' => 'France',
                'phone_code' => '33',
            ),
            75 => 
            array (
                'id' => 76,
                'short_name' => 'GF',
                'name' => 'French Guiana',
                'phone_code' => '594',
            ),
            76 => 
            array (
                'id' => 77,
                'short_name' => 'PF',
                'name' => 'French Polynesia',
                'phone_code' => '689',
            ),
            77 => 
            array (
                'id' => 78,
                'short_name' => 'TF',
                'name' => 'French Southern Territories',
                'phone_code' => '0',
            ),
            78 => 
            array (
                'id' => 79,
                'short_name' => 'GA',
                'name' => 'Gabon',
                'phone_code' => '241',
            ),
            79 => 
            array (
                'id' => 80,
                'short_name' => 'GM',
                'name' => 'Gambia The',
                'phone_code' => '220',
            ),
            80 => 
            array (
                'id' => 81,
                'short_name' => 'GE',
                'name' => 'Georgia',
                'phone_code' => '995',
            ),
            81 => 
            array (
                'id' => 82,
                'short_name' => 'DE',
                'name' => 'Germany',
                'phone_code' => '49',
            ),
            82 => 
            array (
                'id' => 83,
                'short_name' => 'GH',
                'name' => 'Ghana',
                'phone_code' => '233',
            ),
            83 => 
            array (
                'id' => 84,
                'short_name' => 'GI',
                'name' => 'Gibraltar',
                'phone_code' => '350',
            ),
            84 => 
            array (
                'id' => 85,
                'short_name' => 'GR',
                'name' => 'Greece',
                'phone_code' => '30',
            ),
            85 => 
            array (
                'id' => 86,
                'short_name' => 'GL',
                'name' => 'Greenland',
                'phone_code' => '299',
            ),
            86 => 
            array (
                'id' => 87,
                'short_name' => 'GD',
                'name' => 'Grenada',
                'phone_code' => '1473',
            ),
            87 => 
            array (
                'id' => 88,
                'short_name' => 'GP',
                'name' => 'Guadeloupe',
                'phone_code' => '590',
            ),
            88 => 
            array (
                'id' => 89,
                'short_name' => 'GU',
                'name' => 'Guam',
                'phone_code' => '1671',
            ),
            89 => 
            array (
                'id' => 90,
                'short_name' => 'GT',
                'name' => 'Guatemala',
                'phone_code' => '502',
            ),
            90 => 
            array (
                'id' => 91,
                'short_name' => 'XU',
                'name' => 'Guernsey and Alderney',
                'phone_code' => '44',
            ),
            91 => 
            array (
                'id' => 92,
                'short_name' => 'GN',
                'name' => 'Guinea',
                'phone_code' => '224',
            ),
            92 => 
            array (
                'id' => 93,
                'short_name' => 'GW',
                'name' => 'Guinea-Bissau',
                'phone_code' => '245',
            ),
            93 => 
            array (
                'id' => 94,
                'short_name' => 'GY',
                'name' => 'Guyana',
                'phone_code' => '592',
            ),
            94 => 
            array (
                'id' => 95,
                'short_name' => 'HT',
                'name' => 'Haiti',
                'phone_code' => '509',
            ),
            95 => 
            array (
                'id' => 96,
                'short_name' => 'HM',
                'name' => 'Heard and McDonald Islands',
                'phone_code' => '0',
            ),
            96 => 
            array (
                'id' => 97,
                'short_name' => 'HN',
                'name' => 'Honduras',
                'phone_code' => '504',
            ),
            97 => 
            array (
                'id' => 98,
                'short_name' => 'HK',
                'name' => 'Hong Kong S.A.R.',
                'phone_code' => '852',
            ),
            98 => 
            array (
                'id' => 99,
                'short_name' => 'HU',
                'name' => 'Hungary',
                'phone_code' => '36',
            ),
            99 => 
            array (
                'id' => 100,
                'short_name' => 'IS',
                'name' => 'Iceland',
                'phone_code' => '354',
            ),
            100 => 
            array (
                'id' => 101,
                'short_name' => 'IN',
                'name' => 'India',
                'phone_code' => '91',
            ),
            101 => 
            array (
                'id' => 102,
                'short_name' => 'ID',
                'name' => 'Indonesia',
                'phone_code' => '62',
            ),
            102 => 
            array (
                'id' => 103,
                'short_name' => 'IR',
                'name' => 'Iran',
                'phone_code' => '98',
            ),
            103 => 
            array (
                'id' => 104,
                'short_name' => 'IQ',
                'name' => 'Iraq',
                'phone_code' => '964',
            ),
            104 => 
            array (
                'id' => 105,
                'short_name' => 'IE',
                'name' => 'Ireland',
                'phone_code' => '353',
            ),
            105 => 
            array (
                'id' => 106,
                'short_name' => 'IL',
                'name' => 'Israel',
                'phone_code' => '972',
            ),
            106 => 
            array (
                'id' => 107,
                'short_name' => 'IT',
                'name' => 'Italy',
                'phone_code' => '39',
            ),
            107 => 
            array (
                'id' => 108,
                'short_name' => 'JM',
                'name' => 'Jamaica',
                'phone_code' => '1876',
            ),
            108 => 
            array (
                'id' => 109,
                'short_name' => 'JP',
                'name' => 'Japan',
                'phone_code' => '81',
            ),
            109 => 
            array (
                'id' => 110,
                'short_name' => 'XJ',
                'name' => 'Jersey',
                'phone_code' => '44',
            ),
            110 => 
            array (
                'id' => 111,
                'short_name' => 'JO',
                'name' => 'Jordan',
                'phone_code' => '962',
            ),
            111 => 
            array (
                'id' => 112,
                'short_name' => 'KZ',
                'name' => 'Kazakhstan',
                'phone_code' => '7',
            ),
            112 => 
            array (
                'id' => 113,
                'short_name' => 'KE',
                'name' => 'Kenya',
                'phone_code' => '254',
            ),
            113 => 
            array (
                'id' => 114,
                'short_name' => 'KI',
                'name' => 'Kiribati',
                'phone_code' => '686',
            ),
            114 => 
            array (
                'id' => 115,
                'short_name' => 'KP',
                'name' => 'Korea North',
                'phone_code' => '850',
            ),
            115 => 
            array (
                'id' => 116,
                'short_name' => 'KR',
                'name' => 'Korea South',
                'phone_code' => '82',
            ),
            116 => 
            array (
                'id' => 117,
                'short_name' => 'KW',
                'name' => 'Kuwait',
                'phone_code' => '965',
            ),
            117 => 
            array (
                'id' => 118,
                'short_name' => 'KG',
                'name' => 'Kyrgyzstan',
                'phone_code' => '996',
            ),
            118 => 
            array (
                'id' => 119,
                'short_name' => 'LA',
                'name' => 'Laos',
                'phone_code' => '856',
            ),
            119 => 
            array (
                'id' => 120,
                'short_name' => 'LV',
                'name' => 'Latvia',
                'phone_code' => '371',
            ),
            120 => 
            array (
                'id' => 121,
                'short_name' => 'LB',
                'name' => 'Lebanon',
                'phone_code' => '961',
            ),
            121 => 
            array (
                'id' => 122,
                'short_name' => 'LS',
                'name' => 'Lesotho',
                'phone_code' => '266',
            ),
            122 => 
            array (
                'id' => 123,
                'short_name' => 'LR',
                'name' => 'Liberia',
                'phone_code' => '231',
            ),
            123 => 
            array (
                'id' => 124,
                'short_name' => 'LY',
                'name' => 'Libya',
                'phone_code' => '218',
            ),
            124 => 
            array (
                'id' => 125,
                'short_name' => 'LI',
                'name' => 'Liechtenstein',
                'phone_code' => '423',
            ),
            125 => 
            array (
                'id' => 126,
                'short_name' => 'LT',
                'name' => 'Lithuania',
                'phone_code' => '370',
            ),
            126 => 
            array (
                'id' => 127,
                'short_name' => 'LU',
                'name' => 'Luxembourg',
                'phone_code' => '352',
            ),
            127 => 
            array (
                'id' => 128,
                'short_name' => 'MO',
                'name' => 'Macau S.A.R.',
                'phone_code' => '853',
            ),
            128 => 
            array (
                'id' => 129,
                'short_name' => 'MK',
                'name' => 'Macedonia',
                'phone_code' => '389',
            ),
            129 => 
            array (
                'id' => 130,
                'short_name' => 'MG',
                'name' => 'Madagascar',
                'phone_code' => '261',
            ),
            130 => 
            array (
                'id' => 131,
                'short_name' => 'MW',
                'name' => 'Malawi',
                'phone_code' => '265',
            ),
            131 => 
            array (
                'id' => 132,
                'short_name' => 'MY',
                'name' => 'Malaysia',
                'phone_code' => '60',
            ),
            132 => 
            array (
                'id' => 133,
                'short_name' => 'MV',
                'name' => 'Maldives',
                'phone_code' => '960',
            ),
            133 => 
            array (
                'id' => 134,
                'short_name' => 'ML',
                'name' => 'Mali',
                'phone_code' => '223',
            ),
            134 => 
            array (
                'id' => 135,
                'short_name' => 'MT',
                'name' => 'Malta',
                'phone_code' => '356',
            ),
            135 => 
            array (
                'id' => 136,
                'short_name' => 'XM',
            'name' => 'Man (Isle of)',
                'phone_code' => '44',
            ),
            136 => 
            array (
                'id' => 137,
                'short_name' => 'MH',
                'name' => 'Marshall Islands',
                'phone_code' => '692',
            ),
            137 => 
            array (
                'id' => 138,
                'short_name' => 'MQ',
                'name' => 'Martinique',
                'phone_code' => '596',
            ),
            138 => 
            array (
                'id' => 139,
                'short_name' => 'MR',
                'name' => 'Mauritania',
                'phone_code' => '222',
            ),
            139 => 
            array (
                'id' => 140,
                'short_name' => 'MU',
                'name' => 'Mauritius',
                'phone_code' => '230',
            ),
            140 => 
            array (
                'id' => 141,
                'short_name' => 'YT',
                'name' => 'Mayotte',
                'phone_code' => '269',
            ),
            141 => 
            array (
                'id' => 142,
                'short_name' => 'MX',
                'name' => 'Mexico',
                'phone_code' => '52',
            ),
            142 => 
            array (
                'id' => 143,
                'short_name' => 'FM',
                'name' => 'Micronesia',
                'phone_code' => '691',
            ),
            143 => 
            array (
                'id' => 144,
                'short_name' => 'MD',
                'name' => 'Moldova',
                'phone_code' => '373',
            ),
            144 => 
            array (
                'id' => 145,
                'short_name' => 'MC',
                'name' => 'Monaco',
                'phone_code' => '377',
            ),
            145 => 
            array (
                'id' => 146,
                'short_name' => 'MN',
                'name' => 'Mongolia',
                'phone_code' => '976',
            ),
            146 => 
            array (
                'id' => 147,
                'short_name' => 'MS',
                'name' => 'Montserrat',
                'phone_code' => '1664',
            ),
            147 => 
            array (
                'id' => 148,
                'short_name' => 'MA',
                'name' => 'Morocco',
                'phone_code' => '212',
            ),
            148 => 
            array (
                'id' => 149,
                'short_name' => 'MZ',
                'name' => 'Mozambique',
                'phone_code' => '258',
            ),
            149 => 
            array (
                'id' => 150,
                'short_name' => 'MM',
                'name' => 'Myanmar',
                'phone_code' => '95',
            ),
            150 => 
            array (
                'id' => 151,
                'short_name' => 'NA',
                'name' => 'Namibia',
                'phone_code' => '264',
            ),
            151 => 
            array (
                'id' => 152,
                'short_name' => 'NR',
                'name' => 'Nauru',
                'phone_code' => '674',
            ),
            152 => 
            array (
                'id' => 153,
                'short_name' => 'NP',
                'name' => 'Nepal',
                'phone_code' => '977',
            ),
            153 => 
            array (
                'id' => 154,
                'short_name' => 'AN',
                'name' => 'Netherlands Antilles',
                'phone_code' => '599',
            ),
            154 => 
            array (
                'id' => 155,
                'short_name' => 'NL',
                'name' => 'Netherlands The',
                'phone_code' => '31',
            ),
            155 => 
            array (
                'id' => 156,
                'short_name' => 'NC',
                'name' => 'New Caledonia',
                'phone_code' => '687',
            ),
            156 => 
            array (
                'id' => 157,
                'short_name' => 'NZ',
                'name' => 'New Zealand',
                'phone_code' => '64',
            ),
            157 => 
            array (
                'id' => 158,
                'short_name' => 'NI',
                'name' => 'Nicaragua',
                'phone_code' => '505',
            ),
            158 => 
            array (
                'id' => 159,
                'short_name' => 'NE',
                'name' => 'Niger',
                'phone_code' => '227',
            ),
            159 => 
            array (
                'id' => 160,
                'short_name' => 'NG',
                'name' => 'Nigeria',
                'phone_code' => '234',
            ),
            160 => 
            array (
                'id' => 161,
                'short_name' => 'NU',
                'name' => 'Niue',
                'phone_code' => '683',
            ),
            161 => 
            array (
                'id' => 162,
                'short_name' => 'NF',
                'name' => 'Norfolk Island',
                'phone_code' => '672',
            ),
            162 => 
            array (
                'id' => 163,
                'short_name' => 'MP',
                'name' => 'Northern Mariana Islands',
                'phone_code' => '1670',
            ),
            163 => 
            array (
                'id' => 164,
                'short_name' => 'NO',
                'name' => 'Norway',
                'phone_code' => '47',
            ),
            164 => 
            array (
                'id' => 165,
                'short_name' => 'OM',
                'name' => 'Oman',
                'phone_code' => '968',
            ),
            165 => 
            array (
                'id' => 166,
                'short_name' => 'PK',
                'name' => 'Pakistan',
                'phone_code' => '92',
            ),
            166 => 
            array (
                'id' => 167,
                'short_name' => 'PW',
                'name' => 'Palau',
                'phone_code' => '680',
            ),
            167 => 
            array (
                'id' => 168,
                'short_name' => 'PS',
                'name' => 'Palestinian Territory Occupied',
                'phone_code' => '970',
            ),
            168 => 
            array (
                'id' => 169,
                'short_name' => 'PA',
                'name' => 'Panama',
                'phone_code' => '507',
            ),
            169 => 
            array (
                'id' => 170,
                'short_name' => 'PG',
                'name' => 'Papua new Guinea',
                'phone_code' => '675',
            ),
            170 => 
            array (
                'id' => 171,
                'short_name' => 'PY',
                'name' => 'Paraguay',
                'phone_code' => '595',
            ),
            171 => 
            array (
                'id' => 172,
                'short_name' => 'PE',
                'name' => 'Peru',
                'phone_code' => '51',
            ),
            172 => 
            array (
                'id' => 173,
                'short_name' => 'PH',
                'name' => 'Philippines',
                'phone_code' => '63',
            ),
            173 => 
            array (
                'id' => 174,
                'short_name' => 'PN',
                'name' => 'Pitcairn Island',
                'phone_code' => '0',
            ),
            174 => 
            array (
                'id' => 175,
                'short_name' => 'PL',
                'name' => 'Poland',
                'phone_code' => '48',
            ),
            175 => 
            array (
                'id' => 176,
                'short_name' => 'PT',
                'name' => 'Portugal',
                'phone_code' => '351',
            ),
            176 => 
            array (
                'id' => 177,
                'short_name' => 'PR',
                'name' => 'Puerto Rico',
                'phone_code' => '1787',
            ),
            177 => 
            array (
                'id' => 178,
                'short_name' => 'QA',
                'name' => 'Qatar',
                'phone_code' => '974',
            ),
            178 => 
            array (
                'id' => 179,
                'short_name' => 'RE',
                'name' => 'Reunion',
                'phone_code' => '262',
            ),
            179 => 
            array (
                'id' => 180,
                'short_name' => 'RO',
                'name' => 'Romania',
                'phone_code' => '40',
            ),
            180 => 
            array (
                'id' => 181,
                'short_name' => 'RU',
                'name' => 'Russia',
                'phone_code' => '70',
            ),
            181 => 
            array (
                'id' => 182,
                'short_name' => 'RW',
                'name' => 'Rwanda',
                'phone_code' => '250',
            ),
            182 => 
            array (
                'id' => 183,
                'short_name' => 'SH',
                'name' => 'Saint Helena',
                'phone_code' => '290',
            ),
            183 => 
            array (
                'id' => 184,
                'short_name' => 'KN',
                'name' => 'Saint Kitts And Nevis',
                'phone_code' => '1869',
            ),
            184 => 
            array (
                'id' => 185,
                'short_name' => 'LC',
                'name' => 'Saint Lucia',
                'phone_code' => '1758',
            ),
            185 => 
            array (
                'id' => 186,
                'short_name' => 'PM',
                'name' => 'Saint Pierre and Miquelon',
                'phone_code' => '508',
            ),
            186 => 
            array (
                'id' => 187,
                'short_name' => 'VC',
                'name' => 'Saint Vincent And The Grenadines',
                'phone_code' => '1784',
            ),
            187 => 
            array (
                'id' => 188,
                'short_name' => 'WS',
                'name' => 'Samoa',
                'phone_code' => '684',
            ),
            188 => 
            array (
                'id' => 189,
                'short_name' => 'SM',
                'name' => 'San Marino',
                'phone_code' => '378',
            ),
            189 => 
            array (
                'id' => 190,
                'short_name' => 'ST',
                'name' => 'Sao Tome and Principe',
                'phone_code' => '239',
            ),
            190 => 
            array (
                'id' => 191,
                'short_name' => 'SA',
                'name' => 'Saudi Arabia',
                'phone_code' => '966',
            ),
            191 => 
            array (
                'id' => 192,
                'short_name' => 'SN',
                'name' => 'Senegal',
                'phone_code' => '221',
            ),
            192 => 
            array (
                'id' => 193,
                'short_name' => 'RS',
                'name' => 'Serbia',
                'phone_code' => '381',
            ),
            193 => 
            array (
                'id' => 194,
                'short_name' => 'SC',
                'name' => 'Seychelles',
                'phone_code' => '248',
            ),
            194 => 
            array (
                'id' => 195,
                'short_name' => 'SL',
                'name' => 'Sierra Leone',
                'phone_code' => '232',
            ),
            195 => 
            array (
                'id' => 196,
                'short_name' => 'SG',
                'name' => 'Singapore',
                'phone_code' => '65',
            ),
            196 => 
            array (
                'id' => 197,
                'short_name' => 'SK',
                'name' => 'Slovakia',
                'phone_code' => '421',
            ),
            197 => 
            array (
                'id' => 198,
                'short_name' => 'SI',
                'name' => 'Slovenia',
                'phone_code' => '386',
            ),
            198 => 
            array (
                'id' => 199,
                'short_name' => 'XG',
                'name' => 'Smaller Territories of the UK',
                'phone_code' => '44',
            ),
            199 => 
            array (
                'id' => 200,
                'short_name' => 'SB',
                'name' => 'Solomon Islands',
                'phone_code' => '677',
            ),
            200 => 
            array (
                'id' => 201,
                'short_name' => 'SO',
                'name' => 'Somalia',
                'phone_code' => '252',
            ),
            201 => 
            array (
                'id' => 202,
                'short_name' => 'ZA',
                'name' => 'South Africa',
                'phone_code' => '27',
            ),
            202 => 
            array (
                'id' => 203,
                'short_name' => 'GS',
                'name' => 'South Georgia',
                'phone_code' => '0',
            ),
            203 => 
            array (
                'id' => 204,
                'short_name' => 'SS',
                'name' => 'South Sudan',
                'phone_code' => '211',
            ),
            204 => 
            array (
                'id' => 205,
                'short_name' => 'ES',
                'name' => 'Spain',
                'phone_code' => '34',
            ),
            205 => 
            array (
                'id' => 206,
                'short_name' => 'LK',
                'name' => 'Sri Lanka',
                'phone_code' => '94',
            ),
            206 => 
            array (
                'id' => 207,
                'short_name' => 'SD',
                'name' => 'Sudan',
                'phone_code' => '249',
            ),
            207 => 
            array (
                'id' => 208,
                'short_name' => 'SR',
                'name' => 'Suriname',
                'phone_code' => '597',
            ),
            208 => 
            array (
                'id' => 209,
                'short_name' => 'SJ',
                'name' => 'Svalbard And Jan Mayen Islands',
                'phone_code' => '47',
            ),
            209 => 
            array (
                'id' => 210,
                'short_name' => 'SZ',
                'name' => 'Swaziland',
                'phone_code' => '268',
            ),
            210 => 
            array (
                'id' => 211,
                'short_name' => 'SE',
                'name' => 'Sweden',
                'phone_code' => '46',
            ),
            211 => 
            array (
                'id' => 212,
                'short_name' => 'CH',
                'name' => 'Switzerland',
                'phone_code' => '41',
            ),
            212 => 
            array (
                'id' => 213,
                'short_name' => 'SY',
                'name' => 'Syria',
                'phone_code' => '963',
            ),
            213 => 
            array (
                'id' => 214,
                'short_name' => 'TW',
                'name' => 'Taiwan',
                'phone_code' => '886',
            ),
            214 => 
            array (
                'id' => 215,
                'short_name' => 'TJ',
                'name' => 'Tajikistan',
                'phone_code' => '992',
            ),
            215 => 
            array (
                'id' => 216,
                'short_name' => 'TZ',
                'name' => 'Tanzania',
                'phone_code' => '255',
            ),
            216 => 
            array (
                'id' => 217,
                'short_name' => 'TH',
                'name' => 'Thailand',
                'phone_code' => '66',
            ),
            217 => 
            array (
                'id' => 218,
                'short_name' => 'TG',
                'name' => 'Togo',
                'phone_code' => '228',
            ),
            218 => 
            array (
                'id' => 219,
                'short_name' => 'TK',
                'name' => 'Tokelau',
                'phone_code' => '690',
            ),
            219 => 
            array (
                'id' => 220,
                'short_name' => 'TO',
                'name' => 'Tonga',
                'phone_code' => '676',
            ),
            220 => 
            array (
                'id' => 221,
                'short_name' => 'TT',
                'name' => 'Trinidad And Tobago',
                'phone_code' => '1868',
            ),
            221 => 
            array (
                'id' => 222,
                'short_name' => 'TN',
                'name' => 'Tunisia',
                'phone_code' => '216',
            ),
            222 => 
            array (
                'id' => 223,
                'short_name' => 'TR',
                'name' => 'Turkey',
                'phone_code' => '90',
            ),
            223 => 
            array (
                'id' => 224,
                'short_name' => 'TM',
                'name' => 'Turkmenistan',
                'phone_code' => '7370',
            ),
            224 => 
            array (
                'id' => 225,
                'short_name' => 'TC',
                'name' => 'Turks And Caicos Islands',
                'phone_code' => '1649',
            ),
            225 => 
            array (
                'id' => 226,
                'short_name' => 'TV',
                'name' => 'Tuvalu',
                'phone_code' => '688',
            ),
            226 => 
            array (
                'id' => 227,
                'short_name' => 'UG',
                'name' => 'Uganda',
                'phone_code' => '256',
            ),
            227 => 
            array (
                'id' => 228,
                'short_name' => 'UA',
                'name' => 'Ukraine',
                'phone_code' => '380',
            ),
            228 => 
            array (
                'id' => 229,
                'short_name' => 'AE',
                'name' => 'United Arab Emirates',
                'phone_code' => '971',
            ),
            229 => 
            array (
                'id' => 230,
                'short_name' => 'GB',
                'name' => 'United Kingdom',
                'phone_code' => '44',
            ),
            230 => 
            array (
                'id' => 231,
                'short_name' => 'US',
                'name' => 'United States',
                'phone_code' => '1',
            ),
            231 => 
            array (
                'id' => 232,
                'short_name' => 'UM',
                'name' => 'United States Minor Outlying Islands',
                'phone_code' => '1',
            ),
            232 => 
            array (
                'id' => 233,
                'short_name' => 'UY',
                'name' => 'Uruguay',
                'phone_code' => '598',
            ),
            233 => 
            array (
                'id' => 234,
                'short_name' => 'UZ',
                'name' => 'Uzbekistan',
                'phone_code' => '998',
            ),
            234 => 
            array (
                'id' => 235,
                'short_name' => 'VU',
                'name' => 'Vanuatu',
                'phone_code' => '678',
            ),
            235 => 
            array (
                'id' => 236,
                'short_name' => 'VA',
            'name' => 'Vatican City State (Holy See)',
                'phone_code' => '39',
            ),
            236 => 
            array (
                'id' => 237,
                'short_name' => 'VE',
                'name' => 'Venezuela',
                'phone_code' => '58',
            ),
            237 => 
            array (
                'id' => 238,
                'short_name' => 'VN',
                'name' => 'Vietnam',
                'phone_code' => '84',
            ),
            238 => 
            array (
                'id' => 239,
                'short_name' => 'VG',
            'name' => 'Virgin Islands (British)',
                'phone_code' => '1284',
            ),
            239 => 
            array (
                'id' => 240,
                'short_name' => 'VI',
            'name' => 'Virgin Islands (US)',
                'phone_code' => '1340',
            ),
            240 => 
            array (
                'id' => 241,
                'short_name' => 'WF',
                'name' => 'Wallis And Futuna Islands',
                'phone_code' => '681',
            ),
            241 => 
            array (
                'id' => 242,
                'short_name' => 'EH',
                'name' => 'Western Sahara',
                'phone_code' => '212',
            ),
            242 => 
            array (
                'id' => 243,
                'short_name' => 'YE',
                'name' => 'Yemen',
                'phone_code' => '967',
            ),
            243 => 
            array (
                'id' => 244,
                'short_name' => 'YU',
                'name' => 'Yugoslavia',
                'phone_code' => '38',
            ),
            244 => 
            array (
                'id' => 245,
                'short_name' => 'ZM',
                'name' => 'Zambia',
                'phone_code' => '260',
            ),
            245 => 
            array (
                'id' => 246,
                'short_name' => 'ZW',
                'name' => 'Zimbabwe',
                'phone_code' => '263',
            ),
        ));
        
        
    }
}