<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Entities\Menu;

class SettingMenuController extends Controller
{
    public function getMenu()
    {
        $data['menu'] = $this->getSubMenu(0);
        return view('backend.setting.menu.settingMenu', $data);
    }

    private function getSubMenu($parentId, $ignoreId = null)
    {
        $menu = Menu::whereParentId($parentId)
            ->where('id', '<>', $ignoreId)
            ->get();
        $menu->map(function ($menuCount) use($ignoreId) {
            $menuCount->sub = $this->getSubMenu($menuCount->id, $ignoreId);
            return $menuCount;
        });
        return $menu;
    }

    public function formCreate()
    {
        $menu = $this->getSubMenu(0);
        return view('backend.setting.menu.createMenu', compact('menu'));
    }

    public function CreateMenu(Request $request)
    {
        $request->validate(
        [
            'parent_id' => 'required',
            'name' => 'required',
            'link' => 'required',
        ],
        [
            'name.required' => ' Vui lòng không để trống tên menu',
            'link.required' => ' Vui lòng không để trống link menu',
        ]
        );
        $menu = new Menu();
        $menu->name = $request->name;
        $menu->parent_id = $request->parent_id;
        $menu->link = $request->link;
        $menu->save();
        session()->flash('success', 'Đã tạo mới.');
        return redirect('/admin/setting/menu');
    }

    public function formEdit($id)
    {
        $menu = $this->getSubMenu(0);
        $createMenu = Menu::findOrFail($id);
        return view('backend.setting.menu.editMenu', compact('menu', 'createMenu'));
    }

    public function EditMenu(Request $request, $id)
    {
        $request->validate([
            'parent_id' => 'required',
            'name' => 'required',
            'link' => 'required'
        ]);
        // dd($createMenu->fill($request->only(['parent_id', 'name', 'link'])));

        $input = $request->only([
            'parent_id',
            'name',
            'link',
        ]);
        $editMenu = Menu::findOrFail($id);
        $editMenu->fill($input);
        $editMenu->save();
        return redirect('/admin/setting/menu')->with('success', 'Đã cập nhật.');
    }

    public function deleteMenu(Request $request)
    {
        $request->validate([
            'menu_id' => 'required'
        ]);
        $deleted = Menu::destroy($request->menu_id);
        if ($deleted) {
            return response()->json([], 204);
        }
        return response()->json(['message' => "Sản phẩm cần xoá không tồn tại."], 404);
    }
}
