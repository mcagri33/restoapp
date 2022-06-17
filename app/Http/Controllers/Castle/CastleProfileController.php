<?php

namespace App\Http\Controllers\Castle;

use App\Http\Controllers\Controller;
use App\Models\Castle;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use Image;

class CastleProfileController extends Controller
{
    public function CastleProfile() {

        $castleData = Castle::find(1);
        return view('castle.castle_profile_view', compact('castleData'));

    }

    public function CastleProfileEdit() {
        $editData = Castle::find(1);
        return view('castle.castle_profile_edit', compact('editData'));

    }

    public function castleProfileUpdate(Request $request) {
        $data = Castle::find(1);
        $data->name = $request->name;
        $data->email = $request->email;

        if($request->file('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            @unlink(public_path('upload/castle/'.$data->profile_photo_path));
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/castle'),$fileName);
            $data['profile_photo_path'] = $fileName;
        }
        $data->save();

        if ($data) {
            return redirect()->route('castle.profile')->with('success', 'İşlem Başarılı!');
        }
        else {
            return back()->with('failed', 'Hata! İşlem Başarısız!');
        }


    }

    public function castleChangePassword() {
        return view('castle.castle_change_password');
    }

    public function CastleUpdateChangePassword(Request $request) {
        $validateData = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed',
        ]);

        $hashedPassword = Castle::find(1)->password;

        if(Hash::check($request->oldpassword,$hashedPassword)) {
            $admin = Castle::find(1);
            $admin->password = Hash::make($request->password);
            $admin->save();
            Auth::logout();
            return redirect()->route('castle.logout');
        }else {
            return redirect()->back();
        }

    }
}
