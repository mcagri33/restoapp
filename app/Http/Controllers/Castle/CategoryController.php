<?php

namespace App\Http\Controllers\Castle;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('name','asc')->get();
        return view('castle.menu.index',compact('categories'));
    }

    public function add()
    {
        return view('castle.menu.add');
    }

    public function edit($id)
    {
        $categoryId = Category::find($id);
        return view('castle.menu.edit',compact('categoryId'));
    }
}
