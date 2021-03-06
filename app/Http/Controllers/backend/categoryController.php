<?php

namespace App\Http\Controllers\backend;

use App\Entities\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    function getCategory(Request $request){
        $category = Category::get();
        return view("backend.category.category", compact('category'));
    }
    function postCategory(CreateCategoryRequest $request){
        $createCategory = new Category();
        $createCategory->name = $request->name;
        $createCategory->save();
        session()->flash('success', 'Đã tạo mới.');
        return redirect('/admin/category');
    }

    public function deleteCategory(Request $request)
    {
        $request->validate([
            'category_id' => 'required'
        ]);
        $deleted = Category::destroy($request->category_id);
        if ($deleted) {
            return response()->json([], 204);
        }
        return response()->json(['message' => "Sản phẩm cần xoá không tồn tại."], 404);
    }

    public function getEditCategory($id)
    {
        $category = Category::findOrFail($id);
        return view("backend.category.editcategory", compact('category'));
    }

    public function updateCategory(UpdateCategoryRequest $request, $id)
    {
        // $request->validate(
        // [
        //     'name' => 'required','name|min:3|max:100'
        // ],
        // [
        //     'name.required' =>  'Vui lòng không để trống',
        //     'name.min' => 'Nội dung phải dài hơn 3 ký tự',
        //     'name.max' => 'Nội dung phải ngắn hơn 100 ký tự',

        // ]);
        $cate=Category::find($id);
        $cate->name=$request->name;
        $cate->save();
        return redirect('/admin/category')->with('success', 'Đã cập nhật.');

    }

}
