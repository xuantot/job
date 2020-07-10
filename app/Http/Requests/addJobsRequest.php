<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addJobsRequest extends FormRequest
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
            'job_code'=>'required|unique:jobs,job_code|min:5',
            'job_name'=>'required|min:5',
            'salary'=>'required|numeric',
            'experience'=>'required',
            'nature'=>'required',
            'address'=>'required',
            'logo'=>'image',
        ];
    }

    public function messages()
    {
        return [
            'job_code.required'=>'Mã Job không được để trống!',
            'job_code.unique'=>'Mã Job đã tồn tại!',
            'job_code.min'=>'Mã Job phải ít nhất 5 kí tự!',
            'job_name.required'=>'Tên Job không được để trống!',
            'job_name.min'=>'Tên Job phải ít nhất 5 kí tự!',
            'salary.required'=>'Mức lương không được để trống!',
            'salary.numeric'=>'Mức lương phải là dạng số!',
            'experience.required'=>'Kinh nghiệm làm việc không được để trống!',
            'nature.required'=>'Thời gian làm việc không được để trống!',
            'address.required'=>'Địa điểm không được để trống!',
            'logo.image'=>'File phải là dạng ảnh!',
        ];
    }
}
