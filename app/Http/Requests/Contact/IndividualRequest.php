<?php

namespace App\Http\Requests\Contact;

use Illuminate\Foundation\Http\FormRequest;

class IndividualRequest extends FormRequest
{
    //  Determine if the user is authorized to make this request.
    public function authorize()
    {
        return true;
    }

    //  Get the validation rules that apply to the request.
    public function rules()
    {
        return [
            'name' => ['required','string','max:100'],
            'sex' => ['required','max:10','string'],
            'address' => ['nullable','string'],
            'mobile' => ['nullable','string'],
            'email' => ['nullable','email','max:100'],
        ];
    }
}
