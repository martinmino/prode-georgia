<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Employee;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employees = Employee::all();

        foreach ($employees as $employee) {
            $user = new User();
            $user->name        = $employee->name;
            $user->employee_id = $employee->id;

            switch ($employee->id) {
                case 438:
                    $user->email='mmino@georgia.com.ar';
                    break;

                case 1044:
                    $user->email='matias@georgia.com.ar';
                    break;

                default:
                    $user->email= $employee->id . '@georgia.com.ar';
                    break;
            }

            $user->password    = Hash::make('1');
            $user->admin       = true;
            $user->save();
        }

        //Creo los pronosticos para todos los usuarios
        DB::insert("insert into pronostics (user_id, match_id) select users.id, matches.id from users, matches");
    }
}
