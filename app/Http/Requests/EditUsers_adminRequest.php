<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUsers_adminRequest extends FormRequest
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
            'email'=>'required|email|unique:users_admin,email,'.$this->id.',id',
            'name'=>'required',
            'address'=>'required',
            'phone'=>'required|numeric|unique:users_admin,phone,'.$this->id.',id'

        ];
    }
    public function messages(){
        return[
            'email.required'=>'Email không được để trống',
            'email.email'=>'Nhập đúng định dạng email',
            'email.unique'=>'Email đã tồn tại',
            'name.required'=>'Tên không được để trống',
            'address.required'=>'Địa chỉ không được để trống',
            'phone.required'=>'Điện thoại không được để trống',
            'phone.numeric'=>'Điện thoại phải là số',
            'phone.unique'=>'Điện thoại đã tồn tại',
        ];
    }
}
