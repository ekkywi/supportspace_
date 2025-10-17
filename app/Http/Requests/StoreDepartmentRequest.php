<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDepartmentRequest extends FormRequest
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
        return
            [
                'name' => 'required|string|unique:departments,name',
                'code' => 'required|string|unique:departments,code|max:5',
            ];
    }

    public function messages(): array
    {
        return
            [
                'name.required' => 'Nama departemen wajib diisi.',
                'name.string' => 'Nama departemen harus berupa teks.',
                'name.unique' => 'Nama departemen sudah ada atau sudah pernah digunakan.',

                'code.required' => 'Kode departemen wajib diisi.',
                'code.string' => 'Kode departemen harus berupa teks.',
                'code.unique' => 'Kode departemen sudah ada ataun sudah pernah digunakan.',
                'code.max' => 'Kode departemen maksimal 5 karakter.',
            ];
    }
}
