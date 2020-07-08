<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addCompanyRequest extends FormRequest
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
            'code'=>'required|unique:company,code|min:6',
            'name'=>'required',
            'address'=>'required',
            'hotline'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'code.required'=>'Mã số thuế công ty không được để trống!',
            'code.unique'=>'Mã công ty đã tồn tại!',
            'code.min'=>'Mã số thuế phải ít nhất 6 kí tự!',
            'name.required'=>'Tên công ty không được để trống!',
            'address.required'=>'Địa chỉ công ty không được để trống!',
            'hotline.required'=>'Số điện thoại không được để trống!',
        ];
    }
}
