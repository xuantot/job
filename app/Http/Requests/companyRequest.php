<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class companyRequest extends FormRequest
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
            'name'=>'required|unique:company,name',
            'address'=>'required',
            'hotline'=>'required|numeric'
        ];
    }
    function messages(){
        return[
            'name.required'=>'Tên công ty không được để trống',
            'name.unique'=>'Tên công ty không được trùng',
            'address.required'=>'Địa chỉ không được để trống',
            'hotline.required'=>'Điện thoại không được để trống',
            'hotline.numeric'=>'Điện thoại phải là số'
        ];
    }
}
