<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('clients')->delete();
        
        \DB::table('clients')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'GUEVARA',
                'phone' => NULL,
                'dni' => '29010804',
                'created_at' => '2018-06-04 18:29:22',
                'updated_at' => '2018-06-04 18:29:22',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'TORRESI',
                'phone' => NULL,
                'dni' => '29010804',
                'created_at' => '2018-06-04 18:30:09',
                'updated_at' => '2018-06-04 18:30:09',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'DAURIA',
                'phone' => NULL,
                'dni' => '29010804',
                'created_at' => '2018-06-04 18:30:16',
                'updated_at' => '2018-06-04 18:30:16',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'ROBINSON',
                'phone' => NULL,
                'dni' => '29010804',
                'created_at' => '2018-06-04 18:30:20',
                'updated_at' => '2018-06-04 18:30:20',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'BOZUNOVSKY',
                'phone' => NULL,
                'dni' => '29010804',
                'created_at' => '2018-06-04 18:30:24',
                'updated_at' => '2018-06-04 18:30:24',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'DIBENEDETTO',
                'phone' => NULL,
                'dni' => '29010801',
                'created_at' => '2018-06-04 18:30:30',
                'updated_at' => '2018-06-04 18:30:30',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'DOBRENIC',
                'phone' => NULL,
                'dni' => '29010801',
                'created_at' => '2018-06-04 18:30:34',
                'updated_at' => '2018-06-04 18:30:34',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'MEDICA',
                'phone' => NULL,
                'dni' => '29010801',
                'created_at' => '2018-06-04 18:30:37',
                'updated_at' => '2018-06-04 18:30:37',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'RUZZO',
                'phone' => NULL,
                'dni' => '29010801',
                'created_at' => '2018-06-04 18:30:41',
                'updated_at' => '2018-06-04 18:30:41',
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'BORZONE',
                'phone' => NULL,
                'dni' => '29010801',
                'created_at' => '2018-06-04 18:30:46',
                'updated_at' => '2018-06-04 18:30:46',
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'FLOCCO',
                'phone' => NULL,
                'dni' => '29010801',
                'created_at' => '2018-06-04 18:30:52',
                'updated_at' => '2018-06-04 18:30:52',
            ),
            11 => 
            array (
                'id' => 13,
                'name' => 'MOLINA',
                'phone' => NULL,
                'dni' => '29010900',
                'created_at' => '2018-06-04 18:30:55',
                'updated_at' => '2018-06-04 18:30:55',
            ),
            12 => 
            array (
                'id' => 14,
                'name' => 'DOCIMO',
                'phone' => NULL,
                'dni' => '29010900',
                'created_at' => '2018-06-04 18:30:59',
                'updated_at' => '2018-06-04 18:30:59',
            ),
            13 => 
            array (
                'id' => 15,
                'name' => 'PAMIO',
                'phone' => NULL,
                'dni' => '29010900',
                'created_at' => '2018-06-04 18:31:04',
                'updated_at' => '2018-06-04 18:31:04',
            ),
            14 => 
            array (
                'id' => 16,
                'name' => 'BECCHETTI',
                'phone' => NULL,
                'dni' => '29010900',
                'created_at' => '2018-06-04 18:31:40',
                'updated_at' => '2018-06-04 18:31:40',
            ),
            15 => 
            array (
                'id' => 17,
                'name' => 'GUALTIERI',
                'phone' => NULL,
                'dni' => '29010900',
                'created_at' => '2018-06-04 18:31:44',
                'updated_at' => '2018-06-04 18:31:44',
            ),
            16 => 
            array (
                'id' => 18,
                'name' => 'OZUNA',
                'phone' => NULL,
                'dni' => '29010900',
                'created_at' => '2018-06-04 18:31:49',
                'updated_at' => '2018-06-04 18:31:49',
            ),
            17 => 
            array (
                'id' => 19,
                'name' => 'PASCALE',
                'phone' => NULL,
                'dni' => '29010900',
                'created_at' => '2018-06-04 18:31:53',
                'updated_at' => '2018-06-04 18:31:53',
            ),
            18 => 
            array (
                'id' => 20,
                'name' => 'GALLO',
                'phone' => NULL,
                'dni' => '29010900',
                'created_at' => '2018-06-04 18:31:58',
                'updated_at' => '2018-06-04 18:31:58',
            ),
            19 => 
            array (
                'id' => 21,
                'name' => 'QUINTANA',
                'phone' => NULL,
                'dni' => '29010900',
                'created_at' => '2018-06-04 18:32:02',
                'updated_at' => '2018-06-04 18:32:02',
            ),
            20 => 
            array (
                'id' => 22,
                'name' => 'VANZETTI',
                'phone' => NULL,
                'dni' => '29010900',
                'created_at' => '2018-06-04 18:32:07',
                'updated_at' => '2018-06-04 18:32:07',
            ),
            21 => 
            array (
                'id' => 23,
                'name' => 'BERTOGLIO',
                'phone' => NULL,
                'dni' => '29010900',
                'created_at' => '2018-06-04 18:32:11',
                'updated_at' => '2018-06-04 18:32:11',
            ),
            22 => 
            array (
                'id' => 24,
                'name' => 'COSTA',
                'phone' => NULL,
                'dni' => '29011100',
                'created_at' => '2018-06-04 18:32:14',
                'updated_at' => '2018-06-04 18:32:14',
            ),
            23 => 
            array (
                'id' => 25,
                'name' => 'FERRARI',
                'phone' => NULL,
                'dni' => '25010800',
                'created_at' => '2018-06-04 18:32:18',
                'updated_at' => '2018-06-04 18:32:18',
            ),
            24 => 
            array (
                'id' => 26,
                'name' => 'GAGNO',
                'phone' => NULL,
                'dni' => '25010800',
                'created_at' => '2018-06-04 18:32:22',
                'updated_at' => '2018-06-04 18:32:22',
            ),
            25 => 
            array (
                'id' => 27,
                'name' => 'CAVALLI',
                'phone' => NULL,
                'dni' => '25010800',
                'created_at' => '2018-06-04 18:32:25',
                'updated_at' => '2018-06-04 18:32:25',
            ),
            26 => 
            array (
                'id' => 28,
                'name' => 'AIRALDO',
                'phone' => NULL,
                'dni' => '25010800',
                'created_at' => '2018-06-04 18:32:30',
                'updated_at' => '2018-06-04 18:32:30',
            ),
            27 => 
            array (
                'id' => 29,
                'name' => 'MANZANO',
                'phone' => NULL,
                'dni' => '25010800',
                'created_at' => '2018-06-04 18:32:34',
                'updated_at' => '2018-06-04 18:32:34',
            ),
            28 => 
            array (
                'id' => 30,
                'name' => 'SANCHEZ',
                'phone' => NULL,
                'dni' => '25010800',
                'created_at' => '2018-06-04 18:32:39',
                'updated_at' => '2018-06-04 18:32:39',
            ),
            29 => 
            array (
                'id' => 31,
                'name' => 'HAEDO',
                'phone' => NULL,
                'dni' => '25010800',
                'created_at' => '2018-06-04 18:32:43',
                'updated_at' => '2018-06-04 18:32:43',
            ),
            30 => 
            array (
                'id' => 32,
                'name' => 'REP HAE',
                'phone' => NULL,
                'dni' => '25010802',
                'created_at' => '2018-06-04 18:32:47',
                'updated_at' => '2018-06-04 18:32:47',
            ),
            31 => 
            array (
                'id' => 33,
                'name' => 'DRAGONETTI',
                'phone' => NULL,
                'dni' => '21020605',
                'created_at' => '2018-06-04 18:32:51',
                'updated_at' => '2018-06-04 18:32:51',
            ),
            32 => 
            array (
                'id' => 34,
                'name' => 'TURATI',
                'phone' => NULL,
                'dni' => '29011104',
                'created_at' => '2018-06-04 18:32:55',
                'updated_at' => '2018-06-04 18:32:55',
            ),
            33 => 
            array (
                'id' => 35,
                'name' => 'GARGANO',
                'phone' => NULL,
                'dni' => '29011104',
                'created_at' => '2018-06-04 18:32:59',
                'updated_at' => '2018-06-04 18:32:59',
            ),
            34 => 
            array (
                'id' => 36,
                'name' => 'RRHH',
                'phone' => NULL,
                'dni' => '21020700',
                'created_at' => '2018-06-04 18:33:03',
                'updated_at' => '2018-06-04 18:33:03',
            ),
            35 => 
            array (
                'id' => 37,
                'name' => 'BALLESTRERO',
                'phone' => NULL,
                'dni' => '29010101',
                'created_at' => '2018-06-04 18:33:07',
                'updated_at' => '2018-06-04 18:33:07',
            ),
            36 => 
            array (
                'id' => 38,
                'name' => 'FELLI',
                'phone' => NULL,
                'dni' => '29010101',
                'created_at' => '2018-06-04 18:33:42',
                'updated_at' => '2018-06-04 18:33:42',
            ),
            37 => 
            array (
                'id' => 39,
                'name' => 'SNYDER',
                'phone' => NULL,
                'dni' => '29011100',
                'created_at' => '2018-06-04 18:33:47',
                'updated_at' => '2018-06-04 18:33:47',
            ),
            38 => 
            array (
                'id' => 40,
                'name' => 'PIEDITORTI',
                'phone' => NULL,
                'dni' => '29011100',
                'created_at' => '2018-06-04 18:33:50',
                'updated_at' => '2018-06-04 18:33:50',
            ),
            39 => 
            array (
                'id' => 41,
                'name' => 'PORTILLO',
                'phone' => NULL,
                'dni' => '29011100',
                'created_at' => '2018-06-04 18:33:54',
                'updated_at' => '2018-06-04 18:33:54',
            ),
            40 => 
            array (
                'id' => 42,
                'name' => 'JOBKE',
                'phone' => NULL,
                'dni' => '29011100',
                'created_at' => '2018-06-04 18:33:58',
                'updated_at' => '2018-06-04 18:33:58',
            ),
            41 => 
            array (
                'id' => 43,
                'name' => 'ARDUINO',
                'phone' => NULL,
                'dni' => '29011110',
                'created_at' => '2018-06-04 18:34:19',
                'updated_at' => '2018-06-04 18:34:19',
            ),
            42 => 
            array (
                'id' => 44,
                'name' => 'IBARRA',
                'phone' => NULL,
                'dni' => '29011111',
                'created_at' => '2018-06-04 18:34:23',
                'updated_at' => '2018-06-04 18:34:23',
            ),
            43 => 
            array (
                'id' => 45,
                'name' => 'INON',
                'phone' => NULL,
                'dni' => '29011112',
                'created_at' => '2018-06-04 18:34:27',
                'updated_at' => '2018-06-04 18:34:27',
            ),
            44 => 
            array (
                'id' => 46,
                'name' => 'SPERNANZONI',
                'phone' => NULL,
                'dni' => '29011113',
                'created_at' => '2018-06-04 18:34:32',
                'updated_at' => '2018-06-04 18:34:32',
            ),
            45 => 
            array (
                'id' => 47,
                'name' => 'FUSE',
                'phone' => NULL,
                'dni' => '29011114',
                'created_at' => '2018-06-04 18:34:35',
                'updated_at' => '2018-06-04 18:34:35',
            ),
            46 => 
            array (
                'id' => 48,
                'name' => 'ACADEMY',
                'phone' => NULL,
                'dni' => '29011123',
                'created_at' => '2018-06-04 18:34:39',
                'updated_at' => '2018-06-04 18:34:39',
            ),
            47 => 
            array (
                'id' => 49,
                'name' => 'COMEX',
                'phone' => NULL,
                'dni' => '21020617',
                'created_at' => '2018-06-04 18:34:43',
                'updated_at' => '2018-06-04 18:34:43',
            ),
            48 => 
            array (
                'id' => 50,
                'name' => 'SFC',
                'phone' => NULL,
                'dni' => '21020610',
                'created_at' => '2018-06-04 18:34:46',
                'updated_at' => '2018-06-04 18:34:46',
            ),
            49 => 
            array (
                'id' => 51,
                'name' => 'CONTABILIDAD',
                'phone' => NULL,
                'dni' => '21020619',
                'created_at' => '2018-06-04 18:34:50',
                'updated_at' => '2018-06-04 18:34:50',
            ),
            50 => 
            array (
                'id' => 52,
                'name' => 'COMPRAS',
                'phone' => NULL,
                'dni' => '29030400',
                'created_at' => '2018-06-04 18:34:54',
                'updated_at' => '2018-06-04 18:34:54',
            ),
            51 => 
            array (
                'id' => 53,
                'name' => 'INGENIERIA',
                'phone' => NULL,
                'dni' => '29070501',
                'created_at' => '2018-06-04 18:34:57',
                'updated_at' => '2018-06-04 18:34:57',
            ),
            52 => 
            array (
                'id' => 54,
                'name' => 'CALIDAD',
                'phone' => NULL,
                'dni' => '29030302',
                'created_at' => '2018-06-04 18:35:01',
                'updated_at' => '2018-06-04 18:35:01',
            ),
            53 => 
            array (
                'id' => 55,
                'name' => 'MANUFACTURA',
                'phone' => NULL,
                'dni' => '29030301',
                'created_at' => '2018-06-04 18:35:05',
                'updated_at' => '2018-06-04 18:35:05',
            ),
            54 => 
            array (
                'id' => 56,
                'name' => 'BONI',
                'phone' => NULL,
                'dni' => '1480929',
                'created_at' => '2018-06-04 18:35:21',
                'updated_at' => '2018-06-04 18:35:21',
            ),
            55 => 
            array (
                'id' => 57,
                'name' => 'IVAR',
                'phone' => NULL,
                'dni' => '1480929',
                'created_at' => '2018-06-04 18:35:25',
                'updated_at' => '2018-06-04 18:35:25',
            ),
            56 => 
            array (
                'id' => 58,
                'name' => 'VACCA',
                'phone' => NULL,
                'dni' => '1480929',
                'created_at' => '2018-06-04 18:35:29',
                'updated_at' => '2018-06-04 18:35:29',
            ),
            57 => 
            array (
                'id' => 59,
                'name' => 'CONS.FINAL',
                'phone' => NULL,
                'dni' => '1901530',
                'created_at' => '2018-06-04 18:36:25',
                'updated_at' => '2018-06-04 18:36:25',
            ),
            58 => 
            array (
                'id' => 60,
                'name' => 'STAFF BOUT',
                'phone' => NULL,
                'dni' => '29011100',
                'created_at' => '2018-06-04 18:36:29',
                'updated_at' => '2018-06-04 18:36:29',
            ),
            59 => 
            array (
                'id' => 61,
                'name' => 'STAFF BOUT',
                'phone' => NULL,
                'dni' => '29011100',
                'created_at' => '2018-06-04 18:36:33',
                'updated_at' => '2018-06-04 18:36:33',
            ),
            60 => 
            array (
                'id' => 62,
                'name' => 'PIAZZA',
                'phone' => NULL,
                'dni' => '9089',
                'created_at' => '2018-06-04 18:36:40',
                'updated_at' => '2018-06-04 18:36:40',
            ),
            61 => 
            array (
                'id' => 63,
                'name' => 'WENDEL',
                'phone' => NULL,
                'dni' => '9089',
                'created_at' => '2018-06-04 18:36:45',
                'updated_at' => '2018-06-04 18:36:45',
            ),
            62 => 
            array (
                'id' => 64,
                'name' => 'PERONA',
                'phone' => NULL,
                'dni' => '9089',
                'created_at' => '2018-06-04 18:36:49',
                'updated_at' => '2018-06-04 18:36:49',
            ),
            63 => 
            array (
                'id' => 65,
                'name' => 'AMAYA',
                'phone' => NULL,
                'dni' => '9089',
                'created_at' => '2018-06-04 18:36:53',
                'updated_at' => '2018-06-04 18:36:53',
            ),
            64 => 
            array (
                'id' => 66,
                'name' => 'FORNERO',
                'phone' => NULL,
                'dni' => '1481249',
                'created_at' => '2018-06-04 18:36:57',
                'updated_at' => '2018-06-04 18:36:57',
            ),
            65 => 
            array (
                'id' => 67,
                'name' => 'MARCHESE',
                'phone' => NULL,
                'dni' => '1481249',
                'created_at' => '2018-06-04 18:37:01',
                'updated_at' => '2018-06-04 18:37:01',
            ),
            66 => 
            array (
                'id' => 68,
                'name' => 'GUAL',
                'phone' => NULL,
                'dni' => '1481249',
                'created_at' => '2018-06-04 18:37:05',
                'updated_at' => '2018-06-04 18:37:05',
            ),
            67 => 
            array (
                'id' => 69,
                'name' => 'BERTONE',
                'phone' => NULL,
                'dni' => '1480993',
                'created_at' => '2018-06-04 18:37:09',
                'updated_at' => '2018-06-04 18:37:09',
            ),
            68 => 
            array (
                'id' => 70,
                'name' => 'GIAMPIERI',
                'phone' => NULL,
                'dni' => '1480993',
                'created_at' => '2018-06-04 18:37:14',
                'updated_at' => '2018-06-04 18:37:14',
            ),
            69 => 
            array (
                'id' => 71,
                'name' => 'KROHLING',
                'phone' => NULL,
                'dni' => '1480993',
                'created_at' => '2018-06-04 18:37:18',
                'updated_at' => '2018-06-04 18:37:18',
            ),
            70 => 
            array (
                'id' => 72,
                'name' => 'ROCCHIETTI',
                'phone' => NULL,
                'dni' => '1480993',
                'created_at' => '2018-06-04 18:37:23',
                'updated_at' => '2018-06-04 18:37:23',
            ),
            71 => 
            array (
                'id' => 73,
                'name' => 'PORCHIETTO',
                'phone' => NULL,
                'dni' => '1480993',
                'created_at' => '2018-06-04 18:37:27',
                'updated_at' => '2018-06-04 18:37:27',
            ),
            72 => 
            array (
                'id' => 74,
                'name' => 'MAZZONI',
                'phone' => NULL,
                'dni' => '1481744',
                'created_at' => '2018-06-04 18:37:30',
                'updated_at' => '2018-06-04 18:37:30',
            ),
            73 => 
            array (
                'id' => 75,
                'name' => 'SEGURA D',
                'phone' => NULL,
                'dni' => '1481744',
                'created_at' => '2018-06-04 18:37:34',
                'updated_at' => '2018-06-04 18:37:34',
            ),
            74 => 
            array (
                'id' => 76,
                'name' => 'SEGURA O',
                'phone' => NULL,
                'dni' => '1481744',
                'created_at' => '2018-06-04 18:37:38',
                'updated_at' => '2018-06-04 18:37:38',
            ),
            75 => 
            array (
                'id' => 77,
                'name' => 'GIODA',
                'phone' => NULL,
                'dni' => '1489142',
                'created_at' => '2018-06-04 18:37:43',
                'updated_at' => '2018-06-04 18:37:43',
            ),
            76 => 
            array (
                'id' => 78,
                'name' => 'PAYOLA',
                'phone' => NULL,
                'dni' => '1489142',
                'created_at' => '2018-06-04 18:38:10',
                'updated_at' => '2018-06-04 18:38:10',
            ),
            77 => 
            array (
                'id' => 79,
                'name' => 'MARGAR',
                'phone' => NULL,
                'dni' => '1489142',
                'created_at' => '2018-06-04 18:38:14',
                'updated_at' => '2018-06-04 18:38:14',
            ),
            78 => 
            array (
                'id' => 80,
                'name' => 'CORTES',
                'phone' => NULL,
                'dni' => '1489142',
                'created_at' => '2018-06-04 18:38:18',
                'updated_at' => '2018-06-04 18:38:18',
            ),
            79 => 
            array (
                'id' => 81,
                'name' => 'PEREYRA',
                'phone' => NULL,
                'dni' => '1489096',
                'created_at' => '2018-06-04 18:38:21',
                'updated_at' => '2018-06-04 18:38:21',
            ),
            80 => 
            array (
                'id' => 82,
                'name' => 'GAREIS',
                'phone' => NULL,
                'dni' => '1489096',
                'created_at' => '2018-06-04 18:38:25',
                'updated_at' => '2018-06-04 18:38:25',
            ),
            81 => 
            array (
                'id' => 83,
                'name' => 'FOLMER M',
                'phone' => NULL,
                'dni' => '1489096',
                'created_at' => '2018-06-04 18:38:30',
                'updated_at' => '2018-06-04 18:38:30',
            ),
            82 => 
            array (
                'id' => 84,
                'name' => 'GARCIA J',
                'phone' => NULL,
                'dni' => '9098',
                'created_at' => '2018-06-04 18:38:34',
                'updated_at' => '2018-06-04 18:38:34',
            ),
            83 => 
            array (
                'id' => 85,
                'name' => 'GARCIA A',
                'phone' => NULL,
                'dni' => '9098',
                'created_at' => '2018-06-04 18:38:37',
                'updated_at' => '2018-06-04 18:38:37',
            ),
            84 => 
            array (
                'id' => 86,
                'name' => 'VIGLIONE',
                'phone' => NULL,
                'dni' => '9098',
                'created_at' => '2018-06-04 18:38:50',
                'updated_at' => '2018-06-04 18:38:50',
            ),
            85 => 
            array (
                'id' => 87,
                'name' => 'WEINBAUR G',
                'phone' => NULL,
                'dni' => '9086',
                'created_at' => '2018-06-04 18:38:53',
                'updated_at' => '2018-06-04 18:38:53',
            ),
            86 => 
            array (
                'id' => 88,
                'name' => 'WEINBAUR A',
                'phone' => NULL,
                'dni' => '9086',
                'created_at' => '2018-06-04 18:38:57',
                'updated_at' => '2018-06-04 18:38:57',
            ),
            87 => 
            array (
                'id' => 89,
                'name' => 'TIRABOSCHI',
                'phone' => NULL,
                'dni' => '9086',
                'created_at' => '2018-06-04 18:39:04',
                'updated_at' => '2018-06-04 18:39:04',
            ),
            88 => 
            array (
                'id' => 90,
                'name' => 'FERNANDEZ',
                'phone' => NULL,
                'dni' => '1480935',
                'created_at' => '2018-06-04 18:39:07',
                'updated_at' => '2018-06-04 18:39:07',
            ),
            89 => 
            array (
                'id' => 91,
                'name' => 'NIEVAS',
                'phone' => NULL,
                'dni' => '1480935',
                'created_at' => '2018-06-04 18:39:11',
                'updated_at' => '2018-06-04 18:39:11',
            ),
            90 => 
            array (
                'id' => 92,
                'name' => 'CALZADA',
                'phone' => NULL,
                'dni' => '1480935',
                'created_at' => '2018-06-04 18:39:14',
                'updated_at' => '2018-06-04 18:39:14',
            ),
            91 => 
            array (
                'id' => 93,
                'name' => 'BERTOIA',
                'phone' => NULL,
                'dni' => '1480935',
                'created_at' => '2018-06-04 18:39:18',
                'updated_at' => '2018-06-04 18:39:18',
            ),
            92 => 
            array (
                'id' => 94,
                'name' => 'OLIVIERI',
                'phone' => NULL,
                'dni' => '1481178',
                'created_at' => '2018-06-04 18:39:25',
                'updated_at' => '2018-06-04 18:39:25',
            ),
            93 => 
            array (
                'id' => 95,
                'name' => 'DOMINICI',
                'phone' => NULL,
                'dni' => '1481178',
                'created_at' => '2018-06-04 18:39:29',
                'updated_at' => '2018-06-04 18:39:29',
            ),
            94 => 
            array (
                'id' => 96,
                'name' => 'CENIZO',
                'phone' => NULL,
                'dni' => '1481178',
                'created_at' => '2018-06-04 18:39:34',
                'updated_at' => '2018-06-04 18:39:34',
            ),
            95 => 
            array (
                'id' => 97,
                'name' => 'VANDONI',
                'phone' => NULL,
                'dni' => '1481178',
                'created_at' => '2018-06-04 18:39:38',
                'updated_at' => '2018-06-04 18:39:38',
            ),
            96 => 
            array (
                'id' => 98,
                'name' => 'BATTAG',
                'phone' => NULL,
                'dni' => '1480908',
                'created_at' => '2018-06-04 18:39:41',
                'updated_at' => '2018-06-04 18:39:41',
            ),
            97 => 
            array (
                'id' => 99,
                'name' => 'NUCCIAR',
                'phone' => NULL,
                'dni' => '1480908',
                'created_at' => '2018-06-04 18:39:45',
                'updated_at' => '2018-06-04 18:39:45',
            ),
            98 => 
            array (
                'id' => 100,
                'name' => 'CASARI',
                'phone' => NULL,
                'dni' => '1480908',
                'created_at' => '2018-06-04 18:39:49',
                'updated_at' => '2018-06-04 18:39:49',
            ),
            99 => 
            array (
                'id' => 101,
                'name' => 'MAQUINAGRO',
                'phone' => NULL,
                'dni' => '1481520',
                'created_at' => '2018-06-04 18:39:53',
                'updated_at' => '2018-06-04 18:39:53',
            ),
            100 => 
            array (
                'id' => 102,
                'name' => 'AGRODIRECTO',
                'phone' => NULL,
                'dni' => '1480910',
                'created_at' => '2018-06-04 18:39:57',
                'updated_at' => '2018-06-04 18:39:57',
            ),
            101 => 
            array (
                'id' => 103,
                'name' => 'MONTES',
                'phone' => NULL,
                'dni' => '1481947',
                'created_at' => '2018-06-04 18:40:01',
                'updated_at' => '2018-06-04 18:40:01',
            ),
            102 => 
            array (
                'id' => 104,
                'name' => 'BARTIZ',
                'phone' => NULL,
                'dni' => '1481947',
                'created_at' => '2018-06-04 18:40:05',
                'updated_at' => '2018-06-04 18:40:05',
            ),
            103 => 
            array (
                'id' => 105,
                'name' => 'SCHLAT',
                'phone' => NULL,
                'dni' => '1481947',
                'created_at' => '2018-06-04 18:40:25',
                'updated_at' => '2018-06-04 18:40:25',
            ),
            104 => 
            array (
                'id' => 106,
                'name' => 'BRUNA',
                'phone' => NULL,
                'dni' => '1481947',
                'created_at' => '2018-06-04 18:40:29',
                'updated_at' => '2018-06-04 18:40:29',
            ),
            105 => 
            array (
                'id' => 107,
                'name' => 'ZUQ D',
                'phone' => NULL,
                'dni' => '1481947',
                'created_at' => '2018-06-04 18:40:33',
                'updated_at' => '2018-06-04 18:40:33',
            ),
            106 => 
            array (
                'id' => 108,
                'name' => 'RASCHIA',
                'phone' => NULL,
                'dni' => '1489073',
                'created_at' => '2018-06-04 18:40:36',
                'updated_at' => '2018-06-04 18:40:36',
            ),
            107 => 
            array (
                'id' => 109,
                'name' => 'SORIANO',
                'phone' => NULL,
                'dni' => '1489073',
                'created_at' => '2018-06-04 18:40:40',
                'updated_at' => '2018-06-04 18:40:40',
            ),
            108 => 
            array (
                'id' => 110,
                'name' => 'SALE',
                'phone' => NULL,
                'dni' => '1489073',
                'created_at' => '2018-06-04 18:40:44',
                'updated_at' => '2018-06-04 18:40:44',
            ),
            109 => 
            array (
                'id' => 111,
                'name' => 'DI CAM',
                'phone' => NULL,
                'dni' => '1481640',
                'created_at' => '2018-06-04 18:40:48',
                'updated_at' => '2018-06-04 18:40:48',
            ),
            110 => 
            array (
                'id' => 112,
                'name' => 'PEREZ',
                'phone' => NULL,
                'dni' => '1481640',
                'created_at' => '2018-06-04 18:40:52',
                'updated_at' => '2018-06-04 18:40:52',
            ),
            111 => 
            array (
                'id' => 113,
                'name' => 'PERALTA',
                'phone' => NULL,
                'dni' => '1481640',
                'created_at' => '2018-06-04 18:40:56',
                'updated_at' => '2018-06-04 18:40:56',
            ),
            112 => 
            array (
                'id' => 114,
                'name' => 'ZUQ L',
                'phone' => NULL,
                'dni' => '1481327',
                'created_at' => '2018-06-04 18:40:59',
                'updated_at' => '2018-06-04 18:40:59',
            ),
            113 => 
            array (
                'id' => 115,
                'name' => 'ZUQ M',
                'phone' => NULL,
                'dni' => '1481327',
                'created_at' => '2018-06-04 18:41:03',
                'updated_at' => '2018-06-04 18:41:03',
            ),
            114 => 
            array (
                'id' => 116,
                'name' => 'GUTIER',
                'phone' => NULL,
                'dni' => '1481327',
                'created_at' => '2018-06-04 18:41:07',
                'updated_at' => '2018-06-04 18:41:07',
            ),
            115 => 
            array (
                'id' => 117,
                'name' => 'BELLINI',
                'phone' => NULL,
                'dni' => '1481327',
                'created_at' => '2018-06-04 18:41:10',
                'updated_at' => '2018-06-04 18:41:10',
            ),
            116 => 
            array (
                'id' => 118,
                'name' => 'BOSSIO',
                'phone' => NULL,
                'dni' => '1481327',
                'created_at' => '2018-06-04 18:41:14',
                'updated_at' => '2018-06-04 18:41:14',
            ),
            117 => 
            array (
                'id' => 119,
                'name' => 'BRUECH',
                'phone' => NULL,
                'dni' => '1481168',
                'created_at' => '2018-06-04 18:41:18',
                'updated_at' => '2018-06-04 18:41:18',
            ),
            118 => 
            array (
                'id' => 120,
                'name' => 'ECHEVER',
                'phone' => NULL,
                'dni' => '1481168',
                'created_at' => '2018-06-04 18:41:22',
                'updated_at' => '2018-06-04 18:41:22',
            ),
            119 => 
            array (
                'id' => 121,
                'name' => 'GAUSS M',
                'phone' => NULL,
                'dni' => '1634726',
                'created_at' => '2018-06-04 18:41:25',
                'updated_at' => '2018-06-04 18:41:25',
            ),
            120 => 
            array (
                'id' => 122,
                'name' => 'GAUSS G',
                'phone' => NULL,
                'dni' => '1634726',
                'created_at' => '2018-06-04 18:41:30',
                'updated_at' => '2018-06-04 18:41:30',
            ),
            121 => 
            array (
                'id' => 123,
                'name' => 'WEIGAN',
                'phone' => NULL,
                'dni' => '1634726',
                'created_at' => '2018-06-04 18:41:34',
                'updated_at' => '2018-06-04 18:41:34',
            ),
            122 => 
            array (
                'id' => 124,
                'name' => 'ARUTA',
                'phone' => NULL,
                'dni' => '1489118',
                'created_at' => '2018-06-04 18:41:38',
                'updated_at' => '2018-06-04 18:41:38',
            ),
            123 => 
            array (
                'id' => 125,
                'name' => 'MUSSO J',
                'phone' => NULL,
                'dni' => '1489118',
                'created_at' => '2018-06-04 18:41:41',
                'updated_at' => '2018-06-04 18:41:41',
            ),
            124 => 
            array (
                'id' => 126,
                'name' => 'MUSSO JO',
                'phone' => NULL,
                'dni' => '1489118',
                'created_at' => '2018-06-04 18:41:46',
                'updated_at' => '2018-06-04 18:41:46',
            ),
            125 => 
            array (
                'id' => 127,
                'name' => 'TAMAG D',
                'phone' => NULL,
                'dni' => '1489158',
                'created_at' => '2018-06-04 18:41:50',
                'updated_at' => '2018-06-04 18:41:50',
            ),
            126 => 
            array (
                'id' => 128,
                'name' => 'TAMAG F',
                'phone' => NULL,
                'dni' => '1489158',
                'created_at' => '2018-06-04 18:41:54',
                'updated_at' => '2018-06-04 18:41:54',
            ),
            127 => 
            array (
                'id' => 129,
                'name' => 'FERRAIS',
                'phone' => NULL,
                'dni' => '1489158',
                'created_at' => '2018-06-04 18:41:59',
                'updated_at' => '2018-06-04 18:41:59',
            ),
            128 => 
            array (
                'id' => 130,
                'name' => 'CHIESA',
                'phone' => NULL,
                'dni' => '1489158',
                'created_at' => '2018-06-04 18:42:03',
                'updated_at' => '2018-06-04 18:42:03',
            ),
            129 => 
            array (
                'id' => 131,
                'name' => 'ALLENDE L',
                'phone' => NULL,
                'dni' => '1481066',
                'created_at' => '2018-06-04 18:42:08',
                'updated_at' => '2018-06-04 18:42:08',
            ),
            130 => 
            array (
                'id' => 132,
                'name' => 'ALLENDE C',
                'phone' => NULL,
                'dni' => '1481066',
                'created_at' => '2018-06-04 18:42:12',
                'updated_at' => '2018-06-04 18:42:12',
            ),
            131 => 
            array (
                'id' => 133,
                'name' => 'MITRE',
                'phone' => NULL,
                'dni' => '1481066',
                'created_at' => '2018-06-04 18:42:16',
                'updated_at' => '2018-06-04 18:42:16',
            ),
            132 => 
            array (
                'id' => 134,
                'name' => 'ROBERTI',
                'phone' => NULL,
                'dni' => '1481066',
                'created_at' => '2018-06-04 18:42:19',
                'updated_at' => '2018-06-04 18:42:19',
            ),
            133 => 
            array (
                'id' => 135,
                'name' => 'BRARDA',
                'phone' => NULL,
                'dni' => '1480897',
                'created_at' => '2018-06-04 18:42:23',
                'updated_at' => '2018-06-04 18:42:23',
            ),
            134 => 
            array (
                'id' => 136,
                'name' => 'MARENCO',
                'phone' => NULL,
                'dni' => '1480897',
                'created_at' => '2018-06-04 18:42:28',
                'updated_at' => '2018-06-04 18:42:28',
            ),
            135 => 
            array (
                'id' => 137,
                'name' => 'DEMARCHI G',
                'phone' => NULL,
                'dni' => '9074',
                'created_at' => '2018-06-04 18:42:32',
                'updated_at' => '2018-06-04 18:42:32',
            ),
            136 => 
            array (
                'id' => 138,
                'name' => 'DEMARCHI A',
                'phone' => NULL,
                'dni' => '9074',
                'created_at' => '2018-06-04 18:43:09',
                'updated_at' => '2018-06-04 18:43:09',
            ),
            137 => 
            array (
                'id' => 139,
                'name' => 'PECORARI',
                'phone' => NULL,
                'dni' => '9074',
                'created_at' => '2018-06-04 18:43:12',
                'updated_at' => '2018-06-04 18:43:12',
            ),
            138 => 
            array (
                'id' => 140,
                'name' => 'GARCIA',
                'phone' => NULL,
                'dni' => '1489064',
                'created_at' => '2018-06-04 18:43:17',
                'updated_at' => '2018-06-04 18:43:17',
            ),
            139 => 
            array (
                'id' => 141,
                'name' => 'ORTIZ',
                'phone' => NULL,
                'dni' => '1489064',
                'created_at' => '2018-06-04 18:43:21',
                'updated_at' => '2018-06-04 18:43:21',
            ),
            140 => 
            array (
                'id' => 142,
                'name' => 'MINETTI',
                'phone' => NULL,
                'dni' => '1489078',
                'created_at' => '2018-06-04 18:43:25',
                'updated_at' => '2018-06-04 18:43:25',
            ),
        ));
        
        
    }
}