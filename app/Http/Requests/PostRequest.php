<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title'=>'required|min:10',
            'slug'=>'unique:posts',
            'description'=>'required',
            'org_photo'=>'required',
            'category'=>'required',
            'status'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'لطفا فیلد عنوان را پر کنید',
            'slug' => 'نام مستعار دیگری انتخاب کنید',
            'title.min' => 'لطفا فیلد عنوان حداقل 10 کاراکتر پر کنید',
            'description.required' => 'لطفا فیلد توضیحات را پر کنید',
            'org_photo.required' => 'لطفا فیلد تصویر را پر کنید',
            'category.required' => 'لطفا فیلد دسته بندی را پر کنید',
            'status.required' => 'لطفا فیلد وضعیت را پر کنید',
        ];
    }
}
