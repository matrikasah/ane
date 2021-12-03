<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicantOnShore extends FormRequest
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
        // return [
         
        //     'stdsurname' => 'required|regex:/^[a-zA-Z]+$/u|min:2|max:10',
        //     'stdgivenname' => 'required|regex:/^[a-zA-Z]+$/u|min:3|max:20',
        //     'stdhomeaddress' => 'required',
        //     'stdsuburb' => 'required',
        //     'stdpostcode' => 'required|numeric',
        //     'stdtelnum' => 'required|min:10|numeric',
        //     'stdemail' => 'required|email',
        //     'stddob' => 'required|date',
        //     'fullName'=>'required',
            
        //     'relationship'=>'required|regex:/^[a-zA-Z]+$/u|min:1|max:30',
        //     'contactNum'=>'required|numeric',
        //     'mobile'=>'required|numeric',
            
        //     'langbirthCoun'=>'required|regex:/^[a-zA-Z]+$/u|min:3|max:20',
        //     'otherlanguages'=>'required|regex:/^[a-zA-Z]+$/u|min:3|max:20',




        // ];

        return [
         
            'stdsurname' => 'required',
            'stdgivenname' => 'required',
            'stdhomeaddress' => 'required',
            'stdsuburb' => 'required',
            'stdpostcode' => 'required|numeric',
            'stdtelnum' => 'required|min:10|numeric',
            'stdemail' => 'required|email',
            'stddob' => 'required|date',
            'fullName'=>'required',
            
            'relationship'=>'required',
            'contactNum'=>'required|numeric',
            'mobile'=>'required|numeric',
            
            'langbirthCoun'=>'required',
            'otherlanguages'=>'required',




        ];
    }
}
