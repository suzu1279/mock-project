<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'image' => 'mimes:jpeg,png',
            'name' => 'required|max:20',
            'post_code' => 'required',
            'address' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'image.mimes' => '商品画像はjpegまたはpngで入力してください',
            'name.required' => 'ユーザー名を入力してください',
            'name.max' => 'ユーザー名は20文字以内で入力してください',
            'post_code.required' => '郵便番号を入力してください',
            'address.required' => '住所を入力してください',
        ];
    }
}
