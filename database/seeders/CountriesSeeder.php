<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert(['id' => 1, 'name' =>'Senegal', 'iso' => 'sn']);
        DB::table('countries')->insert(['id' => 2, 'name' =>'Paises Bajos', 'iso' => 'nl']);
        DB::table('countries')->insert(['id' => 3, 'name' =>'Qatar', 'iso' => 'qa']);
        DB::table('countries')->insert(['id' => 4, 'name' =>'Ecuador', 'iso' => 'ec']);
        DB::table('countries')->insert(['id' => 5, 'name' =>'Inglaterra', 'iso' => 'gb']);
        DB::table('countries')->insert(['id' => 6, 'name' =>'Iran', 'iso' => 'ir']);
        DB::table('countries')->insert(['id' => 7, 'name' =>'EE.UU.', 'iso' => 'us']);
        DB::table('countries')->insert(['id' => 8, 'name' =>'Gales/Ucrania/Escocia', 'iso' => 'GB-WLS']);
        DB::table('countries')->insert(['id' => 9, 'name' =>'Argentina', 'iso' => 'ar']);
        DB::table('countries')->insert(['id' => 10, 'name' =>'Arabia Saudita', 'iso' => 'sa']);
        DB::table('countries')->insert(['id' => 11, 'name' =>'Mexico', 'iso' => 'mx']);
        DB::table('countries')->insert(['id' => 12, 'name' =>'Polonia', 'iso' => 'pl']);
        DB::table('countries')->insert(['id' => 13, 'name' =>'Dinamarca', 'iso' => 'dk']);
        DB::table('countries')->insert(['id' => 14, 'name' =>'Tunez', 'iso' => 'tn']);
        DB::table('countries')->insert(['id' => 15, 'name' =>'Francia', 'iso' => 'fr']);
        DB::table('countries')->insert(['id' => 16, 'name' =>'Peru/Australia/UAE', 'iso' => 'pe']);
        DB::table('countries')->insert(['id' => 17, 'name' =>'Alemania', 'iso' => 'de']);
        DB::table('countries')->insert(['id' => 18, 'name' =>'Japon', 'iso' => 'jp']);
        DB::table('countries')->insert(['id' => 19, 'name' =>'España', 'iso' => 'es']);
        DB::table('countries')->insert(['id' => 20, 'name' =>'Nueva Zelanda/Costa Rica', 'iso' => 'nz']);
        DB::table('countries')->insert(['id' => 21, 'name' =>'Marruecos', 'iso' => 'ma']);
        DB::table('countries')->insert(['id' => 22, 'name' =>'Croacia', 'iso' => 'hr']);
        DB::table('countries')->insert(['id' => 23, 'name' =>'Belgica', 'iso' => 'be']);
        DB::table('countries')->insert(['id' => 24, 'name' =>'Canada', 'iso' => 'ca']);
        DB::table('countries')->insert(['id' => 25, 'name' =>'Suiza', 'iso' => 'ch']);
        DB::table('countries')->insert(['id' => 26, 'name' =>'Camerun', 'iso' => 'cm']);
        DB::table('countries')->insert(['id' => 27, 'name' =>'Brasil', 'iso' => 'br']);
        DB::table('countries')->insert(['id' => 28, 'name' =>'Serbia', 'iso' => 'rs']);
        DB::table('countries')->insert(['id' => 29, 'name' =>'Uruguay', 'iso' => 'uy']);
        DB::table('countries')->insert(['id' => 30, 'name' =>'Corea del Sur', 'iso' => 'kr']);
        DB::table('countries')->insert(['id' => 31, 'name' =>'Portugal', 'iso' => 'pt']);
        DB::table('countries')->insert(['id' => 32, 'name' =>'Ghana', 'iso' => 'gh']);
    }
}
