<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class PacienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'dtnasc' => 'required|before_or_equal:'.Carbon::now(),
        ];
    }

    public function messages()
    {
        return [
            '*required' => 'O campo :attribute precisa ser preenchido',
            'dtnasc.before_or_equal' => 'A data precisa ser menor ou igual a '.Carbon::now()->format('d/m/Y'),
        ];
    }

    public function attributes()
    {
        return [
            'dtnasc' => 'data de nascimento'
        ];
    }
}
