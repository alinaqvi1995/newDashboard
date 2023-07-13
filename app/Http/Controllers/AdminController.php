<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create(Request $request)
    {
        // dd($request->toArray());
        return view('dashboard.adminpanel.pages.create.create');
    }
    public function createaaa()
    {
        dd('$request->toArray()');
        // return view('dashboard.adminpanel.pages.roles.index');
    }
}
