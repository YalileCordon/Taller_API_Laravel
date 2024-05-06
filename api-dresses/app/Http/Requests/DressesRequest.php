<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DressesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255', 'unique:dresses,name'],
            'size' => ['required', 'string', 'max:255', 'in:S,M,L,XL,XXL'],
            'color' => ['required', 'string', 'max:255', 'regex:/^#[0-9A-F]{6}$/i'],
            'material' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255', 'in:Male,Female,Unisex'],
            'origin' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'price' => ['required', 'numeric', 'min:0'],
            'quantity' => ['required', 'integer', 'min:0'],
            'designer' => ['required', 'string', 'max:255'],
            'status' => ['required', 'boolean'],
            'manufacturing_date' => ['required', 'date', 'before:tomorrow'],
        ];
    }
}
