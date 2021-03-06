<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddTimeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'start_work' => 'date',
            'end_work' => 'date|after:start_work',
        ];
    }
}
