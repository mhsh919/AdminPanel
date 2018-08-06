<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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

                'firstname' => 'required',
                'emailUser' => 'required',
                'userpassword' => 'required'

        ];
    }

    public function messages()
    {

return [
    'firstname.required'=>'نام را حتما وارد نمایید',
    'emailUser.required'=>'ایمیل را حتما وارد نمایید',
    'emailUser.email'=>'ایمیل را حتما وارد نمایید',
    'pass.required'=>'گذرواژه خود را حتما وارد نمایید'
];

    }
}
