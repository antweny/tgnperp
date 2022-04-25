<?php

namespace App\Http\Requests\Structure;

use Illuminate\Foundation\Http\FormRequest;

class BranchRequest extends FormRequest
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
                    'name' => ['required','string','max:20','unique:branches'],
                    'entity' => ['required','string','max:15'],
                    'descriptions' => ['string','nullable'],
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'name' => ['required','string','max:20','unique:branches,id,'.$this->id],
                    'entity' => ['required','string','max:15'],
                    'descriptions' => ['string','nullable'],
                ];
            }
            default:
                return [];
        }
    }
}
