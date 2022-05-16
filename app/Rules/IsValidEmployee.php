<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Employee;
use Illuminate\Contracts\Validation\DataAwareRule;

class IsValidEmployee implements Rule, DataAwareRule
{
    protected $data = [];

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //Abro el legajo del usuario
        $employee = Employee::find($this->data['employee_id']);
        //Devuelvo resultado (true,false) si dni coincide con el legajo
        return $this->data['dni'] == $employee['dni'];
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'El DNI no pertenece al legajo.';
    }

    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }
}
