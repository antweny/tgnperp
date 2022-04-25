<?php

namespace App\Http\Requests\Leadership;

use Illuminate\Foundation\Http\FormRequest;

class ExitModeRequest extends FormRequest
{
    //  Determine if the user is authorized to make this request.
    public function authorize(): bool
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
                    'name' => ['required','string','max:20','unique:exit_modes'],
                    'descriptions' => ['string','nullable'],
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'name' => ['required','string','max:20','unique:exit_modes,id,'.$this->id],
                    'descriptions' => ['string','nullable'],
                ];
            }
            default:
                return [];
        }
    }
}
