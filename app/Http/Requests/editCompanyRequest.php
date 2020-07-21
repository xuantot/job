<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editCompanyRequest extends FormRequest
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
            'name'=>'required',
            'address'=>'required',
            'hotline'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Tên công ty không được để trống!',
            'address.required'=>'Địa chỉ công ty không được để trống!',
            'hotline.required'=>'Số điện thoại không được để trống!',
        ];
    }
}
