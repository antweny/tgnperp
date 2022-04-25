<?php

namespace App\Http\Requests\Leadership;

use Illuminate\Foundation\Http\FormRequest;

class PositionRequest extends FormRequest
{
    //  Determine if the user is authorized to make this request.
    public function authorize(): bool
    {
        return true;
    }

    //  Get the validation rules that apply to the request.
    public function rules()
    {
        return [
            'individual_id' => ['required','integer'],
            'title_id' => ['required','integer'],
            'position_mode_id' => ['required','integer'],
            'organization_id' => ['required','integer'],
            'phase_id' => ['required','integer'],
            'term_id' => ['required','integer'],
            'start_date' => ['required','date'],
            'end_date' => ['nullable','date','after_or_equal:start_date'],
            'exit_mode_id' => ['nullable','integer'],
            'descriptions' => ['nullable','string'],
        ];
    }
}
