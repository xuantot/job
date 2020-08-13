<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Entities\Testimonial;
use Illuminate\Support\Facades\File;

class SettingTestimonialController extends Controller
{
    public function getTestimonial()
    {
        $testimonial = Testimonial::get();
        return view('backend.setting.testimonial.settingTestimonial', compact('testimonial'));
    }

    public function formCreate()
    {
        return view('backend.setting.testimonial.createTestimonial');
    }

    public function CreateTestimonial(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'content' => 'required',
            'avatar' => 'required'
        ]);
        $input = $request->only([
            'name',
            'content',
        ]);

        if($request->hasFile('avatar')){
            if($request->avatar->getClientOriginalExtension()==="jpg"
            || $request->avatar->getClientOriginalExtension()==="png"){
                $file = $request->file('avatar');
                $fileName = $file->getClientOriginalName('avatar');
                $file->move(public_path('dataCustomer/avatarTestimonial'), $fileName);
                // $input['avatar'] = asset("dataCustomer/avatarTestimonial/{$fileName}");
                $input['avatar'] = $fileName;
                $createTestimonial = Testimonial::create($input);
                return redirect('/admin/setting/testimonial')->with('success', 'Đã tạo mới Testimonial.');
            }
        }
    }

    public function formEdit($id)
    {
        $editTestimonial = Testimonial::findOrFail($id);
        return view('backend.setting.testimonial.editTestimonial', compact('editTestimonial'));
    }

    public function EditTestimonial(Request $request, $editTestimonial)
    {
        $request->validate([
            'name' => 'required',
            'content' => 'required',
            'avatar' => 'required'
        ]);
        $input = $request->only([
            'name',
            'content',
            'avatar',
        ]);
        if($request->hasFile('avatar')){
            if($request->avatar->getClientOriginalExtension()==="jpg"
            || $request->avatar->getClientOriginalExtension()==="png"){
                if($request->file('avatar')->getClientOriginalName('avatar') != Testimonial::findOrFail($editTestimonial)->avatar){
                    File::delete('dataCustomer/avatarTestimonial/'. Testimonial::findOrFail($editTestimonial)->avatar);
                }
                    $fileName = $request->file('avatar')->getClientOriginalName('avatar');
                    $request->file('avatar')->move(public_path('dataCustomer/avatarTestimonial'), $fileName);
                    // $input['avatar'] = asset("dataCustomer/avatarTestimonial/{$fileName}");
                    $input['avatar'] = $fileName;
                    $editTestimonial = Testimonial::findOrFail($editTestimonial);
                    $editTestimonial->fill($input);
                    $editTestimonial->save();
                    return redirect('/admin/setting/testimonial')->with('success', 'Sửa Testimonial thành công.');

            }
        }

    }

    public function deleteTestimonial(Request $request)
    {
        $request->validate([
            'testimonial_id' => 'required'
        ]);
        $deleted = Testimonial::destroy($request->testimonial_id);
        if ($deleted) {
            return response()->json([], 204);
        }
        return response()->json(['message' => "Sản phẩm cần xoá không tồn tại."], 404);
    }
}
