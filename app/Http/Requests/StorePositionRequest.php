<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePositionRequest extends FormRequest
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
            'name' => 'required|string|unique:positions,name',
            'code' => 'required|string|unique:positions,code|max:5',
        ];
    }

    public function messages(): array
    {
        return
            [
                'name.required' => 'Nama posisi wajib diisi.',
                'name.string' => 'Nama posisi harus berupa teks.',
                'name.unique' => 'Nama posisi sudah ada atau sudah pernah digunakan.',
                'code.required' => 'Kode posisi wajib diisi.',
                'code.string' => 'Kode posisi harus berupa teks.',
                'code.unique' => 'Kode posisi sudah ada atau sudah pernah digunakan.',
                'code.max' => 'Kode posisi maksimal 5 karakter.',
            ];
    }
}
