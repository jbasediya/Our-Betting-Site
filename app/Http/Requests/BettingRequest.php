<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

use Illuminate\Contracts\Validation\Validator;


class BettingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'name' => 'required',
            'logo' => 'required',
            'description' => 'required',
            'bonus' => 'required',
            // 'turnover' => 'required',
            // 'min_odds' => 'required',
            'website_url' => 'required',
                

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

            'name.required' => 'Name is required',
            'logo.required' => 'Please Select the Logo Image',
            'description.required' => 'Description is required',
            'bonus.required' => 'Bonus is required',
            // 'turnover.required' => 'Turnover is required',
            // 'min_odds.required' => 'Minimum Odds is required',
            'website_url.required' => 'Website Url is required',     
           



        ];

    }

    
}
