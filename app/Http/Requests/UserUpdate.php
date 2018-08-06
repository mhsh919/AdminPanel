<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdate extends FormRequest
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

             'FullName'=>'required',
            'Useremail' =>'unique:users,email',
            'userPassword'=>'nullable|'

        ];
    }

    public function messages()
    {

        return [
            'FullName.required'=>'نام را حتما وارد نمایید',
            'Useremail.required'=>'ایمیل را حتما وارد نمایید',
            'emailUser.email'=>'ایمیل را حتما وارد نمایید',
            'userPassword.required'=>'گذرواژه خود را حتما وارد نمایید'
        ];

    }
    }


