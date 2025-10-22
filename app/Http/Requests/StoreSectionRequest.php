<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;

class StoreSectionRequest extends FormRequest
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
            'name' => 'required|string|unique:sections,name',
            'code' => 'required|string|unique:sections,code|max:5',
        ];
    }

    public function messages(): array
    {
        return
            [
                'name.required' => 'Nama bagian wajib diisi.',
                'name.string' => 'Nama bagian harus berupa teks.',
                'name.unique' => 'Nama bagian sudah ada atau sudah pernah digunakan.',
                'code.required' => 'Kode bagian wajib diisi.',
                'code.string' => 'Kode bagian harus berupa teks.',
                'code.unique' => 'Kode bagian sudah ada atau sudah pernah digunakan.',
                'code.max' => 'Kode bagian maksimal 5 karakter.',
            ];
    }
}
