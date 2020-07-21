<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class users_adminRequest extends FormRequest
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
            //
            'email'=>'required|email|unique:users_admin,email',
            'password'=>'required|min:3|max:30',
            'name'=>'required',
            'address'=>'required',
            'phone'=>'required|numeric|unique:users_admin,phone',

        ];
    }
    public function messages(){
        return[
            'email.required'=>'Email không được để trống',
            'email.email'=>'Nhập đúng định dạng email',
            'email.unique'=>'Email đã tồn tại',
            'password.required'=>'Mật khẩu không được để trống',
            'password.min'=>'Mật khẩu phải dài hơn 3 ký tự',
            'password.max'=>'Mật khẩu không được lớn hơn 30 ký tự',
            'name.required'=>'Tên không được để trống',
            'address.required'=>'Địa chỉ không được để trống',
            'phone.required'=>'Điện thoại không được để trống',
            'phone.numeric'=>'Điện thoại phải là số',
            'phone.unique'=>'Điện thoại đã tồn tại',
        ];
    }
}
