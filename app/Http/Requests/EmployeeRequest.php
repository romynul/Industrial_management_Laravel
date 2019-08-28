<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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


    public function messages(){

        return [
            'email.required' => ':attribute is required'
            
        ];
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
             "ename"     => "required",
            "password"  => "required|min:3",
            "email"      => "required|unique:users,email|max:255",
            "esalary"      => "required",
            "contact"      => "required",
            "address"      => "required"
           
        ];
    }
}
