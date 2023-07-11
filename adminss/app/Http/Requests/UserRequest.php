<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email' => 'required|unique:users,email|email',
            'password' => 'required|min:6|same:password_confirmation',
            'password_confirmation' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'email.required'       => 'Email không được để trống',
            'email.unique'       => 'Email đã tồn tại',
            'password.required'       => 'Mật khẩu không được để trống',
            'password.min'       => 'Mật khẩu không nhỏ hơn 6 ký tự',
            'password.same'       => 'Mật khẩu không khớp',
        ];
    }
}
