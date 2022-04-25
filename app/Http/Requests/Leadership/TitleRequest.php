<?php

namespace App\Http\Requests\Leadership;

use Illuminate\Foundation\Http\FormRequest;

class TitleRequest extends FormRequest
{
    //  Determine if the user is authorized to make this request.
    public function authorize()
    {
        return true;
    }

    //  Get the validation rules that apply to the request.
    public function rules()
    {
        switch ($this->method())
        {
            case 'POST': {
                return [
                    'name' => ['required','string','max:50','unique:titles'],
                    'acronym' => ['nullable','string','max:15'],
                    'descriptions' => ['string','nullable'],
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'name' => ['required','string','max:50','unique:titles,id,'.$this->id],
                    'acronym' => ['nullable','string','max:15'],
                    'descriptions' => ['string','nullable'],
                ];
            }
            default:
                return [];
        }
    }
}
