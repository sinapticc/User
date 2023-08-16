<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Validation extends FormRequest
{
    public function rules(): array
    {
        return [
            'text_input' => 'required|string|persian|max:30'
        ];
    }
}
