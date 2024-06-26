<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|unique:products|max:50',
            'category' => 'max:50',
            'body' => 'required',
            'captcha' => 'required|captcha',
            'product_avatar' => 'required',

        ];
    }
    public function attributes(): array
    {
        return [
            'name' => 'название товара',
            'category'=> 'категория',
            'body'=> 'описание товара',
            'captcha' => 'капча',
            'product_avatar' => 'изображение товара',
        ];
    }
}
