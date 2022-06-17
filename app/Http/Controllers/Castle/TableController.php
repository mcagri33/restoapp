<?php

namespace App\Http\Controllers\Castle;

use App\Http\Controllers\Controller;
use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
        $tables = Table::orderBy('name','asc')->get();
        return view('castle.table.index',compact('tables'));
    }

    public function add()
    {
        return view('castle.table.add');
    }

    public function edit($id)
    {
        $tableId = Table::find($id);
        return view('castle.table.edit',compact('tableId'));
    }
}
