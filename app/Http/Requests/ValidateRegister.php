<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateRegister extends FormRequest
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
            'email' => ['required', 'unique:users'],
            'password' => ['required', 'min:8', 'max:30'],
            'name' => ['required', 'max:40'],
        ];
    }
    function messages()
    {
        return [
            'name.required' => 'tên không được để trống',
            'name.max' => 'tên của bạn quá dài',
            'email.unique' => 'email đã được sử dụng',
            'email.required' => 'email không được bỏ trống',
            'password.required' => 'password không được để trống',
            'password.min' => 'password quá ngắng cần 8-40 ký tự',
            'password.max' => 'password quá dài cần 8-40 ký tự',
        ];
    }
}
