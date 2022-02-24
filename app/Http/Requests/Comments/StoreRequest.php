<?php

namespace App\Http\Requests\Comments;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'parent_id' => 'nullable|exists:comments,id',
            'user_id' => 'required|exists:users,id',
            'body' => 'required|string|max:255',
        ];
    }
}
