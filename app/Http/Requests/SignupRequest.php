<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;




class SignupRequest extends FormRequest
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
        $rules = [
            'username' => 'bail|required|min:3|max:15', /*add bail to stop checking the next filed if this requirement is not meet*/
            'email' => 'bail|required|email',
            'password' => 'bail|required|min:1',
            'password_confirm' => 'bail|required|same:password',

        ];

        return $rules;
    }


}






