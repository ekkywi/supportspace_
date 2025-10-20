<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRoleRequest extends FormRequest
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
            'name' => 'required|string|unique:roles,name',
            'code' => 'required|string|unique:roles,code',
        ];
    }

    public function messages(): array
    {
        return
            [
                'name.required' => 'Nama peran wajib diisi.',
                'name.string' => 'Nama peran harus berupa teks.',
                'name.unique' => 'Nama peran sudah ada atau sudah pernah digunakan.',
                'code.required' => 'Kode peran wajib diisi.',
                'code.string' => 'Kode peran harus berupa teks.',
                'code.unique' => 'Kode peran sudah ada atau sudah pernah digunakan.',
            ];
    }
}
