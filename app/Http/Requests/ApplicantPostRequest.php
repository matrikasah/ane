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
        
            'stdsurname' => 'required|regex:/^[a-zA-Z]+$/u|min:2|max:10',
            'stdgivenname' => 'required|regex:/^[a-zA-Z]+$/u|min:3|max:20',
            'stdhomeaddress' => 'required',
            'stdsuburb' => 'required',
            'stdpostcode' => 'required|numeric',
            'stdtelnum' => 'required|min:10|numeric',
            'stdemail' => 'required|email',
            'stddob' => 'required|date',
            
            'fullName'=>'required|regex:/^[a-zA-Z]+$/u|min:1|max:30',
            'relationship'=>'required|regex:/^[a-zA-Z]+$/u|min:1|max:30',
            'contactNum'=>'required|numeric',
            'mobile'=>'required|numeric',
            
            'langbirthCoun'=>'required|regex:/^[a-zA-Z]+$/u|min:3|max:20',
            'otherlanguages'=>'required|regex:/^[a-zA-Z]+$/u|min:3|max:20',

            'ieltsscr'=>'sometimes|nullable|numeric',
            'ptescr'=>'sometimes|nullable|numeric',
            'toeflscr'=>'sometimes|nullable|numeric',
            'otherscr'=>'sometimes|nullable|numeric',

            

      
        ];

        // $messages = [
        //     'stdsurname.required' => 'Please Enter SurName Thankyou!',
        // ];
    }

    public function messages(){
        return [
            'stdsurname.required' => 'Please Enter SurName Thankyou!',
            'stdsurname.string' => 'Please Enter string Thankyou!',

        ];
    }
}
