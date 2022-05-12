<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*
        DB::table('countries')->insert(['id' => 1, 'name' =>'Senegal']);
        DB::table('countries')->insert(['id' => 2, 'name' =>'Paises Bajos']);
        DB::table('countries')->insert(['id' => 3, 'name' =>'Qatar']);
        DB::table('countries')->insert(['id' => 4, 'name' =>'Ecuador']);
        DB::table('countries')->insert(['id' => 5, 'name' =>'Inglaterra']);
        DB::table('countries')->insert(['id' => 6, 'name' =>'Iran']);
        DB::table('countries')->insert(['id' => 7, 'name' =>'EE.UU.']);
        DB::table('countries')->insert(['id' => 8, 'name' =>'Gales/Ucrania/Escocia']);
        DB::table('countries')->insert(['id' => 9, 'name' =>'Argentina']);
        DB::table('countries')->insert(['id' => 10, 'name' =>'Arabia Saudita']);
        DB::table('countries')->insert(['id' => 11, 'name' =>'Mexico']);
        DB::table('countries')->insert(['id' => 12, 'name' =>'Polonia']);
        DB::table('countries')->insert(['id' => 13, 'name' =>'Dinamarca']);
        DB::table('countries')->insert(['id' => 14, 'name' =>'Tunez']);
        DB::table('countries')->insert(['id' => 15, 'name' =>'Francia']);
        DB::table('countries')->insert(['id' => 16, 'name' =>'Peru/Australia/UAE']);
        DB::table('countries')->insert(['id' => 17, 'name' =>'Alemania']);
        DB::table('countries')->insert(['id' => 18, 'name' =>'Japon']);
        DB::table('countries')->insert(['id' => 19, 'name' =>'España']);
        DB::table('countries')->insert(['id' => 20, 'name' =>'Nueva Zelanda/Costa Rica']);
        DB::table('countries')->insert(['id' => 21, 'name' =>'Marruecos']);
        DB::table('countries')->insert(['id' => 22, 'name' =>'Croacia']);
        DB::table('countries')->insert(['id' => 23, 'name' =>'Belgica']);
        DB::table('countries')->insert(['id' => 24, 'name' =>'Canada']);
        DB::table('countries')->insert(['id' => 25, 'name' =>'Suiza']);
        DB::table('countries')->insert(['id' => 26, 'name' =>'Camerun']);
        DB::table('countries')->insert(['id' => 27, 'name' =>'Brasil']);
        DB::table('countries')->insert(['id' => 28, 'name' =>'Serbia']);
        DB::table('countries')->insert(['id' => 29, 'name' =>'Uruguay']);
        DB::table('countries')->insert(['id' => 30, 'name' =>'Corea del Sur']);
        DB::table('countries')->insert(['id' => 31, 'name' =>'Portugal']);
        DB::table('countries')->insert(['id' => 32, 'name' =>'Ghana']);
        */
        DB::table('matches')->insert(['date' => '2022-11-21 07:00:00', 'country1_id' => 1,  'country2_id' => 2,  'group' => 'A', 'phase' => 'FECHA 1']);
        DB::table('matches')->insert(['date' => '2022-11-21 13:00:00', 'country1_id' => 3,  'country2_id' => 4,  'group' => 'A', 'phase' => 'FECHA 1']);
        DB::table('matches')->insert(['date' => '2022-11-21 10:00:00', 'country1_id' => 5,  'country2_id' => 6,  'group' => 'B', 'phase' => 'FECHA 1']);
        DB::table('matches')->insert(['date' => '2022-11-21 16:00:00', 'country1_id' => 7,  'country2_id' => 8,  'group' => 'B', 'phase' => 'FECHA 1']);
        DB::table('matches')->insert(['date' => '2022-11-22 07:00:00', 'country1_id' => 9,  'country2_id' => 10, 'group' => 'C', 'phase' => 'FECHA 1']);
        DB::table('matches')->insert(['date' => '2022-11-22 13:00:00', 'country1_id' => 11, 'country2_id' => 12, 'group' => 'C', 'phase' => 'FECHA 1']);
        DB::table('matches')->insert(['date' => '2022-11-22 10:00:00', 'country1_id' => 13, 'country2_id' => 14, 'group' => 'D', 'phase' => 'FECHA 1']);
        DB::table('matches')->insert(['date' => '2022-11-22 16:00:00', 'country1_id' => 15, 'country2_id' => 16, 'group' => 'D', 'phase' => 'FECHA 1']);
        DB::table('matches')->insert(['date' => '2022-11-23 10:00:00', 'country1_id' => 17, 'country2_id' => 18, 'group' => 'E', 'phase' => 'FECHA 1']);
        DB::table('matches')->insert(['date' => '2022-11-22 13:00:00', 'country1_id' => 19, 'country2_id' => 20, 'group' => 'E', 'phase' => 'FECHA 1']);
        DB::table('matches')->insert(['date' => '2022-11-23 07:00:00', 'country1_id' => 21, 'country2_id' => 22, 'group' => 'F', 'phase' => 'FECHA 1']);
        DB::table('matches')->insert(['date' => '2022-11-23 16:00:00', 'country1_id' => 23, 'country2_id' => 24, 'group' => 'F', 'phase' => 'FECHA 1']);
        DB::table('matches')->insert(['date' => '2022-11-24 07:00:00', 'country1_id' => 25, 'country2_id' => 26, 'group' => 'G', 'phase' => 'FECHA 1']);
        DB::table('matches')->insert(['date' => '2022-11-24 16:00:00', 'country1_id' => 27, 'country2_id' => 28, 'group' => 'G', 'phase' => 'FECHA 1']);
        DB::table('matches')->insert(['date' => '2022-11-24 10:00:00', 'country1_id' => 29, 'country2_id' => 30, 'group' => 'H', 'phase' => 'FECHA 1']);
        DB::table('matches')->insert(['date' => '2022-11-24 13:00:00', 'country1_id' => 31, 'country2_id' => 32, 'group' => 'H', 'phase' => 'FECHA 1']);
        DB::table('matches')->insert(['date' => '2022-11-25 10:00:00', 'country1_id' => 3,  'country2_id' => 1,  'group' => 'A', 'phase' => 'FECHA 2']);
        DB::table('matches')->insert(['date' => '2022-11-25 13:00:00', 'country1_id' => 4,  'country2_id' => 2,  'group' => 'A', 'phase' => 'FECHA 2']);
        DB::table('matches')->insert(['date' => '2022-11-25 07:00:00', 'country1_id' => 6,  'country2_id' => 8,  'group' => 'B', 'phase' => 'FECHA 2']);
        DB::table('matches')->insert(['date' => '2022-11-25 16:00:00', 'country1_id' => 5,  'country2_id' => 7,  'group' => 'B', 'phase' => 'FECHA 2']);
        DB::table('matches')->insert(['date' => '2022-11-26 10:00:00', 'country1_id' => 10, 'country2_id' => 12, 'group' => 'C', 'phase' => 'FECHA 2']);
        DB::table('matches')->insert(['date' => '2022-11-25 16:00:00', 'country1_id' => 9,  'country2_id' => 11, 'group' => 'C', 'phase' => 'FECHA 2']);
        DB::table('matches')->insert(['date' => '2022-11-26 07:00:00', 'country1_id' => 16, 'country2_id' => 14, 'group' => 'D', 'phase' => 'FECHA 2']);
        DB::table('matches')->insert(['date' => '2022-11-26 13:00:00', 'country1_id' => 15, 'country2_id' => 13, 'group' => 'D', 'phase' => 'FECHA 2']);
        DB::table('matches')->insert(['date' => '2022-11-27 07:00:00', 'country1_id' => 20, 'country2_id' => 18, 'group' => 'E', 'phase' => 'FECHA 2']);
        DB::table('matches')->insert(['date' => '2022-11-27 16:00:00', 'country1_id' => 19, 'country2_id' => 17, 'group' => 'E', 'phase' => 'FECHA 2']);
        DB::table('matches')->insert(['date' => '2022-11-27 10:00:00', 'country1_id' => 23, 'country2_id' => 21, 'group' => 'F', 'phase' => 'FECHA 2']);
        DB::table('matches')->insert(['date' => '2022-11-27 13:00:00', 'country1_id' => 24, 'country2_id' => 22, 'group' => 'F', 'phase' => 'FECHA 2']);
        DB::table('matches')->insert(['date' => '2022-11-28 07:00:00', 'country1_id' => 28, 'country2_id' => 26, 'group' => 'G', 'phase' => 'FECHA 2']);
        DB::table('matches')->insert(['date' => '2022-11-28 13:00:00', 'country1_id' => 27, 'country2_id' => 25, 'group' => 'G', 'phase' => 'FECHA 2']);
        DB::table('matches')->insert(['date' => '2022-11-28 10:00:00', 'country1_id' => 32, 'country2_id' => 30, 'group' => 'H', 'phase' => 'FECHA 2']);
        DB::table('matches')->insert(['date' => '2022-11-28 16:00:00', 'country1_id' => 31, 'country2_id' => 29, 'group' => 'H', 'phase' => 'FECHA 2']);
        DB::table('matches')->insert(['date' => '2022-11-29 12:00:00', 'country1_id' => 3,  'country2_id' => 2,  'group' => 'A', 'phase' => 'FECHA 3']);
        DB::table('matches')->insert(['date' => '2022-11-29 12:00:00', 'country1_id' => 4,  'country2_id' => 1,  'group' => 'A', 'phase' => 'FECHA 3']);
        DB::table('matches')->insert(['date' => '2022-11-29 16:00:00', 'country1_id' => 5,  'country2_id' => 6,  'group' => 'B', 'phase' => 'FECHA 3']);
        DB::table('matches')->insert(['date' => '2022-11-29 16:00:00', 'country1_id' => 6,  'country2_id' => 7,  'group' => 'B', 'phase' => 'FECHA 3']);
        DB::table('matches')->insert(['date' => '2022-11-30 16:00:00', 'country1_id' => 9,  'country2_id' => 12, 'group' => 'C', 'phase' => 'FECHA 3']);
        DB::table('matches')->insert(['date' => '2022-11-30 16:00:00', 'country1_id' => 10, 'country2_id' => 11, 'group' => 'C', 'phase' => 'FECHA 3']);
        DB::table('matches')->insert(['date' => '2022-11-30 12:00:00', 'country1_id' => 16, 'country2_id' => 13, 'group' => 'D', 'phase' => 'FECHA 3']);
        DB::table('matches')->insert(['date' => '2022-11-30 12:00:00', 'country1_id' => 15, 'country2_id' => 14, 'group' => 'D', 'phase' => 'FECHA 3']);
        DB::table('matches')->insert(['date' => '2022-12-01 16:00:00', 'country1_id' => 19, 'country2_id' => 18, 'group' => 'E', 'phase' => 'FECHA 3']);
        DB::table('matches')->insert(['date' => '2022-12-01 16:00:00', 'country1_id' => 20, 'country2_id' => 17, 'group' => 'E', 'phase' => 'FECHA 3']);
        DB::table('matches')->insert(['date' => '2022-12-01 12:00:00', 'country1_id' => 23, 'country2_id' => 22, 'group' => 'F', 'phase' => 'FECHA 3']);
        DB::table('matches')->insert(['date' => '2022-12-01 12:00:00', 'country1_id' => 24, 'country2_id' => 21, 'group' => 'F', 'phase' => 'FECHA 3']);
        DB::table('matches')->insert(['date' => '2022-12-02 16:00:00', 'country1_id' => 27, 'country2_id' => 26, 'group' => 'G', 'phase' => 'FECHA 3']);
        DB::table('matches')->insert(['date' => '2022-12-02 16:00:00', 'country1_id' => 28, 'country2_id' => 25, 'group' => 'G', 'phase' => 'FECHA 3']);
        DB::table('matches')->insert(['date' => '2022-12-02 12:00:00', 'country1_id' => 31, 'country2_id' => 30, 'group' => 'H', 'phase' => 'FECHA 3']);
        DB::table('matches')->insert(['date' => '2022-12-02 12:00:00', 'country1_id' => 32, 'country2_id' => 29, 'group' => 'H', 'phase' => 'FECHA 3']);

    }
}
