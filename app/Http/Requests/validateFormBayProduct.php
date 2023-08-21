<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validateFormBayProduct extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'firstName' => 'required',
            'lastName' => 'required',
            'tinh_tp' => 'required',
            'address' => 'required',
            'phoneNumber' => 'required | max:10 | min:10',
        ];
    }
}
