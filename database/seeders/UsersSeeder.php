<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name        = 'MIÑO, MARTIN ALBERTO';
        $user->employee_id = 438;
        $user->email       = 'mmino@georgia.com.ar';
        $user->password    = Hash::make('12345678');
        $user->admin       = true;
        $user->save();

        $user = new User();
        $user->name        = 'KRAWIECKI, MATIAS';
        $user->employee_id = 1044;
        $user->email       = 'matias@georgia.com.ar';
        $user->password    = Hash::make('12345678');
        $user->admin       = true;
        $user->save();
    }
}
