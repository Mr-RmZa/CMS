<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
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
            'name'=>'required',
            'email'=>'required|email',
            'roles'=>'required',
            'status'=>'required',
            'password'=>'nullable|min:6',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'لطفا فیلد نام را پر کنید',
            'email.required' => 'لطفا فیلد ایمیل را پر کنید',
            'email.email' => 'لطفا ایمیل معتبر وارد کنید',
            'roles.required' => 'لطفا فیلد نقش را پر کنید',
            'status.required' => 'لطفا فیلد وضعیت را پر کنید',
            'password.min' => 'لطفا فیلد رمز عبور حداقل 6 کاراکتر وارد کنید',
        ];
    }
}
