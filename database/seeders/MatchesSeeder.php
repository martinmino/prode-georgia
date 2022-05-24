<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matches')->insert(['date' => '2022-11-21', 'time' => '07:00:00', 'country1_id' => 1,  'country2_id' => 2,  'group' => 'A', 'phase' => 'FECHA 1', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-21', 'time' => '13:00:00', 'country1_id' => 3,  'country2_id' => 4,  'group' => 'A', 'phase' => 'FECHA 1', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-21', 'time' => '10:00:00', 'country1_id' => 5,  'country2_id' => 6,  'group' => 'B', 'phase' => 'FECHA 1', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-21', 'time' => '16:00:00', 'country1_id' => 7,  'country2_id' => 8,  'group' => 'B', 'phase' => 'FECHA 1', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-22', 'time' => '07:00:00', 'country1_id' => 9,  'country2_id' => 10, 'group' => 'C', 'phase' => 'FECHA 1', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-22', 'time' => '13:00:00', 'country1_id' => 11, 'country2_id' => 12, 'group' => 'C', 'phase' => 'FECHA 1', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-22', 'time' => '10:00:00', 'country1_id' => 13, 'country2_id' => 14, 'group' => 'D', 'phase' => 'FECHA 1', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-22', 'time' => '16:00:00', 'country1_id' => 15, 'country2_id' => 16, 'group' => 'D', 'phase' => 'FECHA 1', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-23', 'time' => '10:00:00', 'country1_id' => 17, 'country2_id' => 18, 'group' => 'E', 'phase' => 'FECHA 1', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-22', 'time' => '13:00:00', 'country1_id' => 19, 'country2_id' => 20, 'group' => 'E', 'phase' => 'FECHA 1', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-23', 'time' => '07:00:00', 'country1_id' => 21, 'country2_id' => 22, 'group' => 'F', 'phase' => 'FECHA 1', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-23', 'time' => '16:00:00', 'country1_id' => 23, 'country2_id' => 24, 'group' => 'F', 'phase' => 'FECHA 1', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-24', 'time' => '07:00:00', 'country1_id' => 25, 'country2_id' => 26, 'group' => 'G', 'phase' => 'FECHA 1', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-24', 'time' => '16:00:00', 'country1_id' => 27, 'country2_id' => 28, 'group' => 'G', 'phase' => 'FECHA 1', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-24', 'time' => '10:00:00', 'country1_id' => 29, 'country2_id' => 30, 'group' => 'H', 'phase' => 'FECHA 1', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-24', 'time' => '13:00:00', 'country1_id' => 31, 'country2_id' => 32, 'group' => 'H', 'phase' => 'FECHA 1', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-25', 'time' => '10:00:00', 'country1_id' => 3,  'country2_id' => 1,  'group' => 'A', 'phase' => 'FECHA 2', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-25', 'time' => '13:00:00', 'country1_id' => 4,  'country2_id' => 2,  'group' => 'A', 'phase' => 'FECHA 2', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-25', 'time' => '07:00:00', 'country1_id' => 6,  'country2_id' => 8,  'group' => 'B', 'phase' => 'FECHA 2', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-25', 'time' => '16:00:00', 'country1_id' => 5,  'country2_id' => 7,  'group' => 'B', 'phase' => 'FECHA 2', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-26', 'time' => '10:00:00', 'country1_id' => 10, 'country2_id' => 12, 'group' => 'C', 'phase' => 'FECHA 2', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-25', 'time' => '16:00:00', 'country1_id' => 9,  'country2_id' => 11, 'group' => 'C', 'phase' => 'FECHA 2', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-26', 'time' => '07:00:00', 'country1_id' => 16, 'country2_id' => 14, 'group' => 'D', 'phase' => 'FECHA 2', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-26', 'time' => '13:00:00', 'country1_id' => 15, 'country2_id' => 13, 'group' => 'D', 'phase' => 'FECHA 2', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-27', 'time' => '07:00:00', 'country1_id' => 20, 'country2_id' => 18, 'group' => 'E', 'phase' => 'FECHA 2', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-27', 'time' => '16:00:00', 'country1_id' => 19, 'country2_id' => 17, 'group' => 'E', 'phase' => 'FECHA 2', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-27', 'time' => '10:00:00', 'country1_id' => 23, 'country2_id' => 21, 'group' => 'F', 'phase' => 'FECHA 2', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-27', 'time' => '13:00:00', 'country1_id' => 24, 'country2_id' => 22, 'group' => 'F', 'phase' => 'FECHA 2', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-28', 'time' => '07:00:00', 'country1_id' => 28, 'country2_id' => 26, 'group' => 'G', 'phase' => 'FECHA 2', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-28', 'time' => '13:00:00', 'country1_id' => 27, 'country2_id' => 25, 'group' => 'G', 'phase' => 'FECHA 2', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-28', 'time' => '10:00:00', 'country1_id' => 32, 'country2_id' => 30, 'group' => 'H', 'phase' => 'FECHA 2', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-28', 'time' => '16:00:00', 'country1_id' => 31, 'country2_id' => 29, 'group' => 'H', 'phase' => 'FECHA 2', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-29', 'time' => '12:00:00', 'country1_id' => 3,  'country2_id' => 2,  'group' => 'A', 'phase' => 'FECHA 3', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-29', 'time' => '12:00:00', 'country1_id' => 4,  'country2_id' => 1,  'group' => 'A', 'phase' => 'FECHA 3', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-29', 'time' => '16:00:00', 'country1_id' => 5,  'country2_id' => 6,  'group' => 'B', 'phase' => 'FECHA 3', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-29', 'time' => '16:00:00', 'country1_id' => 6,  'country2_id' => 7,  'group' => 'B', 'phase' => 'FECHA 3', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-30', 'time' => '16:00:00', 'country1_id' => 9,  'country2_id' => 12, 'group' => 'C', 'phase' => 'FECHA 3', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-30', 'time' => '16:00:00', 'country1_id' => 10, 'country2_id' => 11, 'group' => 'C', 'phase' => 'FECHA 3', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-30', 'time' => '12:00:00', 'country1_id' => 16, 'country2_id' => 13, 'group' => 'D', 'phase' => 'FECHA 3', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-11-30', 'time' => '12:00:00', 'country1_id' => 15, 'country2_id' => 14, 'group' => 'D', 'phase' => 'FECHA 3', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-12-01', 'time' => '16:00:00', 'country1_id' => 19, 'country2_id' => 18, 'group' => 'E', 'phase' => 'FECHA 3', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-12-01', 'time' => '16:00:00', 'country1_id' => 20, 'country2_id' => 17, 'group' => 'E', 'phase' => 'FECHA 3', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-12-01', 'time' => '12:00:00', 'country1_id' => 23, 'country2_id' => 22, 'group' => 'F', 'phase' => 'FECHA 3', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-12-01', 'time' => '12:00:00', 'country1_id' => 24, 'country2_id' => 21, 'group' => 'F', 'phase' => 'FECHA 3', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-12-02', 'time' => '16:00:00', 'country1_id' => 27, 'country2_id' => 26, 'group' => 'G', 'phase' => 'FECHA 3', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-12-02', 'time' => '16:00:00', 'country1_id' => 28, 'country2_id' => 25, 'group' => 'G', 'phase' => 'FECHA 3', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-12-02', 'time' => '12:00:00', 'country1_id' => 31, 'country2_id' => 30, 'group' => 'H', 'phase' => 'FECHA 3', 'active_since'=>'2022-01-01']);
        DB::table('matches')->insert(['date' => '2022-12-02', 'time' => '12:00:00', 'country1_id' => 32, 'country2_id' => 29, 'group' => 'H', 'phase' => 'FECHA 3', 'active_since'=>'2022-01-01']);
    }
}
