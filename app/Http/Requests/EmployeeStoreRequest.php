<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeStoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name' => ['required'],
            'middle_name' => ['required'],
            'last_name' => ['required'],
            'address' => ['required'],
            'country_id' => ['required'],
            'state_id' => ['required'],
            'city_id' => ['required'],
            'deparment_id' => ['required'],
            'zip_code' => ['required'],
            'birthdate' => ['required'],
            'date_hired' => ['required'],
        ];
    }
}
