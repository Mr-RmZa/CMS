<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=>'required',
            'slug'=>'unique:posts'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'لطفا فیلد عنوان را پر کنید',
            'slug' => 'نام مستعار دیگری انتخاب کنید'
        ];
    }
}
