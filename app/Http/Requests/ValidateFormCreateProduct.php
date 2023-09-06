<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validateFormCreateProduct extends FormRequest
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
            'thumbnail_images' => 'required',
            'ten_sp' => 'required',
            'gia' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'ten_sp.required' => 'vui lòng nhập tên sản phẩm',
            'gia.required' => 'bạn vui lồng nhập giá sản phẩm',
        ];
    }
}
