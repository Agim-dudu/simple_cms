<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Setel ini ke 'true' jika tidak ada otorisasi tambahan yang diperlukan.
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'priority' => 'required|in:High,Medium,Low',
            'status' => 'required|in:Not done,Done',
            'project_id' => 'required|exists:projects,id', // Validasi kunci asing
            'user_id' => 'required|exists:users,id', // Validasi kunci asing
        ];
    }
}
