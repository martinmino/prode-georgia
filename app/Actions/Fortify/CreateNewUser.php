<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Employee;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use App\Rules\IsValidEmployee;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'employee_id' => ['bail', 'required', 'exists:App\Models\Employee,id', 'integer', 'unique:users', new IsValidEmployee],
            'dni' => ['required', 'integer'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        //se consulta el legajo del empleado
        $employee = Employee::find($input['employee_id']);

        $user = new User();
        $user->name        = $employee['name'];
        $user->employee_id = $input['employee_id'];
        $user->email       = $input['email'];
        $user->password    = Hash::make($input['password']);
        $user->save();

        return $user;

    }
}
