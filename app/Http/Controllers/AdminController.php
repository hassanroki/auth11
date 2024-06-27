<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //AdminDashboard
    public function adminDashboard(){
        return view('admin.adminDashboard');
    }
}
