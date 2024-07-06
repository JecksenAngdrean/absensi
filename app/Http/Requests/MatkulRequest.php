<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MatkulRequest extends FormRequest
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
            'kode' => 'required|string|unique:matkuls',
            'matkul' => 'required|string',
            'sks' => 'required|integer',
            'smt' => 'required|integer',
            'semester' => 'semester',
            'id_prodi' => 'required|integer',
        ];
    }
}