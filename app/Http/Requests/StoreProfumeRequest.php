<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProfumeRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:4', 'max:70'],
            'description' => [ 'nullable', 'string', 'min:10', 'max:4000'],
            'price' => ['required', 'decimal:2'],
            'quantity' => ['required', 'numeric'],
            'brand' => ['nullable', 'string', 'min:2', 'max:100'],
            'image' => ['nullable'],
            'sponsored' => [ 'required', 'boolean'],
            'user_id' => ['required'],
        ];
    }
}
