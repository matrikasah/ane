<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicantPostRequest extends FormRequest
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
        
            'stdsurname' => 'required|max:255',
            'stdgivenname' => 'required',
            'stdhomeaddress' => 'required',
            'stdsuburb' => 'required',
            'stdpostcode' => 'required',
            'stdtelnum' => 'required',
            'stdemail' => 'required',
            'stddob' => 'required',
            'sex' => 'required',
          



        ];

        // $messages = [
        //     'stdsurname.required' => 'Please Enter SurName Thankyou!',
        // ];
    }

    public function messages(){
        return [
            'stdsurname.required' => 'Please Enter SurName Thankyou!',
        ];
    }
}
