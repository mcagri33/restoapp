<?php

namespace App\Http\Controllers;

use App\Models\Castle;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;

class CastleController extends Controller
{
    public function index() {
        return view('castle.castle_login');
    }

    public function login(Request $request) {
        $check = $request->all();
        if(Auth::guard('castle')->attempt(['email' => $check['email'],
            'password' => $check['password']   ])) {
            return redirect()->route('castle.dashboard')->with('success', 'Giriş Basarılı');
        } else {
            return back()-> with('error', 'Email veya şifre hatalı');
        }
    }

    public function dashboard() {
        return view('castle.index');
    }

    public function castleLogout() {
        Auth::guard('castle')->logout();
        return redirect()->route('login_form')->with('success', 'Başarıyla Çıkış Yapıldı!');
    }

    public function castleRegister() {
        return view('castle.castle_register');
    }

    public function castleRegisterCreate(Request $request) {

        Castle::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('login_form')->with('success', 'Başarıyla Kayıt Yapıldı!');
    }
}
