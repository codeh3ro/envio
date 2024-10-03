<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProducaoMedicaRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
          'codigoContrato' => ['nullable','numeric'],
          'classePrestador' => ['required','numeric'],
          'diaInicial' => ['required','numeric'],
          'diaFinal' => ['required','numeric'],
          'compFinanceira' => ['required','date_format:m/Y']
        ];
    }
}
