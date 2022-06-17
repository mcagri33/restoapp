<?php

namespace App\Http\Controllers\Castle;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::orderBy('name','asc')->get();
        return view('castle.menu.index',compact('menus'));
    }

    public function add()
    {
        return view('castle.menu.add');
    }

    public function edit($id)
    {
        $menuId = Menu::find($id);
        return view('castle.menu.edit',compact('menuId'));
    }
}
