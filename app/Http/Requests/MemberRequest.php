<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MemberRequest extends Request
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
            'fname'=>'required',
            'lname'=>'required',
            'city'=>'required',
            'address1'=>'required',
            'postalCode'=>'required|max:6|min6',
            'province'=>'required',
            'agency'=>'required'
        ];
    }
}
