<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'pname.required' => ':attribute testing message'
            
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

            "pname"     => "required | unique:projects,pname",
            "client"  => "required",
            "tcost"      => "required",
            "paid"      => "required"
            //
        ];
    }
}
