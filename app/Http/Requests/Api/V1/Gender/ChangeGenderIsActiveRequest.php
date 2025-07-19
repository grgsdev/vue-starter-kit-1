<?php

namespace  App\Http\Requests\Api\V1\Gender;

use Illuminate\Foundation\Http\FormRequest;

class ChangeGenderIsActiveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'motive' => 'nullable|string',
        ];
    }

    public function bodyParameters()
    {
        return [
            'motive' => [
                'description' => 'Descrição do motivo.',
                'example' => 'Não apresentou a documentação',
            ],
        ];
    }
}