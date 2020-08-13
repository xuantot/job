<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Entities\Contact;

class SettingContactController extends Controller
{
    public function getContact()
    {
        $contact = Contact::get();
        return view('backend.setting.contact.settingContact', compact('contact'));
    }

    public function EditContact(Request $request, $contact)
    {
        $request->validate(
        [
            'address' => 'required|max:100',
            'hotline' => 'required|max:15',
            'email' => 'required|max:40|email',
            'link_map' => 'required|max:1000',
        ],
        [
            'address.required' => 'Vui lòng không để trống địa chỉ',
            'hotline.required' => 'Vui lòng không để trống số điện thoại',
            'email.required' => 'Vui lòng không để trống email',
            'email.email' => 'Trường email sai định dạng',
            'link_map.required' => 'Vui lòng không để trống link google map',
        ]
    );
        $input = $request->only([
            'address',
            'hotline',
            'email',
            'link_map',
        ]);
        $editContact = Contact::findOrFail($contact);
        $editContact->fill($input);
        $editContact->save();
        return back()->with('success', 'Sửa Contact thành công.');
    }
}
