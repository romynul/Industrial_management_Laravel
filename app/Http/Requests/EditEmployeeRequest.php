<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditEmployeeRequest extends FormRequest
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
            "email"      => "required",
            "esalary"      => "required",
            "contact"      => "required",
            "address"      => "required"
           
        ];
    }
}
