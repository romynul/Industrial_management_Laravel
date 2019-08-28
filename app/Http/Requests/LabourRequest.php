<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LabourRequest extends FormRequest
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
            'labourName.required' => ':attribute Name Required',
           
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

            "labourName"     => "required",
            "labourAddress"  => "required",
            "labourContact"      => "required",
           "labourExperties"  => "required",
            "labourSalary"  => "required"
           
        ];
    }
}
