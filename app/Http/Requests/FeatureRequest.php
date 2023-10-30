<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

use Illuminate\Contracts\Validation\Validator;


class FeatureRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
   

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'betting_id' => 'required', 
            'description' => 'required',
            'status' => 'required',
        
        ];

    }

    public function failedValidation(Validator $validator)

    {

        throw new HttpResponseException(response()->json([

            'success'   => false,

            'message'   => 'Validation errors',

            'data'      => $validator->errors()

        ]));

    }



    public function messages()

    {

        return [

            'betting_id.required' => 'Betting Id is required',
            'description.required' => 'Description is required',
            'status.required' => 'Status is required',
          
        ];

    }
}
