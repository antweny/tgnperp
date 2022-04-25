<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    //Determine if the user is authorized to make this request.
    public function authorize()
    {
        return true;
    }

    //Get the validation rules that apply to the request.
    public function rules()
    {
        switch ($this->method())
        {
            case 'POST': {
                return [
                    'name' => ['required', 'string', 'max:255'],
                    'email' => ['required','string','email','max:255','unique:users'],
                    'roles' => ['nullable','array'],
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'name' => ['required', 'string', 'max:255'],
                    'email' => ['required','string','email','max:255','unique:users,id,'.$this->id],
                    'roles' => ['nullable','array'],
                ];
            }
        }

        return [];
    }

}
