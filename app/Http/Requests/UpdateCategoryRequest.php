<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
            'name' => 'required|min:3|max:100|unique:category,name'
        ];
    }

    public function messages()
    {
        return [
            'name.required' =>  'Vui lòng không để trống',
            'name.unique' =>  'Vui lòng không để trùng tên',
            'name.min' => 'Nội dung phải dài hơn 3 ký tự',
            'name.max' => 'Nội dung phải ngắn hơn 100 ký tự',
        ];
    }
}
