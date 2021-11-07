<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.admin-page.index');
    }

}
