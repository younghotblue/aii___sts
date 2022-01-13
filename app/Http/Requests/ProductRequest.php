<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:30',
            'price' => 'required',
            'description' => 'required|max:500',
            'image' => 'image|file',
        ];
    }

    public function attributes()
    {
        return [
            'name' => '商品名',
            'price' => '価格',
            'description' => '商品説明',
            'image' => '商品画像',
        ];
    }
}
