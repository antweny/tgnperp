<?php

namespace App\Http\Requests\Contact;

use Illuminate\Foundation\Http\FormRequest;

class OrganizationRequest extends FormRequest
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
            'name' => ['required','string','max:255'],
            'acronym' => ['nullable','string','max:20'],
            'tier' => ['nullable','string','max:15'],
            'branch_id' => ['required','integer'],
            'type_id' => ['required','integer'],
            'group_id' => ['required','integer'],
            'location_id' => ['nullable','integer'],
            'address' => ['nullable','string'],
            'mobile' => ['nullable','string'],
            'email' => ['nullable','email','max:100'],
        ];
    }
}
