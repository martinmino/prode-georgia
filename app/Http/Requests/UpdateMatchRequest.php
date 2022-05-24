<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMatchRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'date'         => 'required|date',
            'time'         => 'required',
            'country1_id'  => 'required|different:country2_id',
            'goals1'       => 'required|numeric|min:0|max:99',
            'goals2'       => 'required|numeric|min:0|max:99',
            'country2_id'  => 'required',
            'group'        => 'required',
            'phase'        => 'required',
            'active_since' => 'required|date',
        ];
    }
}
