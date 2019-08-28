<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplierRequest extends FormRequest
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
            'sname.required' => ':attribute testing message'
            
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

             "sname"     => "required | unique:suppliers,sname",
            "cowner"  => "required",
            "address"      => "required",
            "contact"      => "required",
            "details"      => "required"

            //
        ];
    }
}
