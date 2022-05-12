<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
