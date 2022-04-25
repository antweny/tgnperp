<?php

namespace App\Http\Requests\Government;

use Illuminate\Foundation\Http\FormRequest;

class PhaseRequest extends FormRequest
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
                    'name' => ['required','string','max:20','unique:phases'],
                    'start_date' => ['required','date'],
                    'end_date' => ['nullable','date','after_or_equal:start_date'],
                    'descriptions' => ['string','nullable'],
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'name' => ['required','string','max:20','unique:phases,id,'.$this->id],
                    'start_date' => ['required','date'],
                    'end_date' => ['nullable','date','after_or_equal:start_date'],
                    'descriptions' => ['string','nullable'],
                ];
            }
            default:
                return [];
        }
    }
}
