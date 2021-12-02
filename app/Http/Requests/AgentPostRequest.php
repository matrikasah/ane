<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgentPostRequest extends FormRequest
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
            'name' => 'required|regex:/^[a-zA-Z]+$/u|min:2|max:20',
            'surname' => 'required|regex:/^[a-zA-Z]+$/u|min:2|max:10',
            'givenname' => 'required|regex:/^[a-zA-Z]+$/u|min:2|max:20',
            'address_in_aus' => 'required',
            'suburb'=> 'required',
            'country'=> 'required',
            'address_outside_aus'=> 'required',
            'suburb_outside_aus'=> 'required',
            'post_code'=>'required|numeric',
            'mobile_num'=>'required|numeric',
            'telephone_num'=>'required|numeric',
            'emergency_contact'=>'required|numeric',
            'emgy_address'=>'required',
            'emgy_telephone'=>'required|numeric',
            'abn'=>'required',
            'acn'=>'required',

            'how_long_operation'=>'sometimes|nullable',
            'deal_area'=>'sometimes|nullable',
            'totalnumber_student'=>'sometimes|nullable',
            'country_student_send'=>'sometimes|nullable',
            'student_in_austrila'=>'sometimes|nullable',
            'partners'=>'sometimes|nullable',
            'institutions'=>'sometimes|nullable',

            'keyStaff'=>'required',
            'useragentname'=>'required|regex:/^[a-zA-Z]+$/u|min:2|max:20',
            'userinstname'=>'required|regex:/^[a-zA-Z]+$/u|min:2|max:20',
            'userinsttitle'=>'required|regex:/^[a-zA-Z]+$/u|min:2|max:20',
            'userinstphone'=>'required|numeric|min:10',
            'userinstfax'=>'required|numeric',
            'userinstemail'=>'required|email',

            'agentprintname'=>'required|regex:/^[a-zA-Z]+$/u|min:2|max:20',
            'agent_sign'=>'required|regex:/^[a-zA-Z]+$/u|min:2|max:20',


        ];
    }
}
