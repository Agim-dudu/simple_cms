<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Setel ini ke 'true' jika tidak ada otorisasi tambahan yang diperlukan.
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'provider' => 'nullable|string',
            'provider_id' => 'nullable|string',
            'provider_token' => 'nullable|string',
            'role' => 'integer', // Sesuaikan dengan aturan validasi yang sesuai dengan peran (role) Anda.
        ];
    }
}
