<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'cname.required' => ':attribute testing message'
            
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

             "cname"     => "required | unique:clients,cname",
            "cowner"  => "required|min:3",
            "address"      => "required",
            "contact"      => "required",
            "details"      => "required"
            
            //
        ];
    }
}
