<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $page = 'dashboard'; 
        return view('admin.profile', ['page' => $page]);
    }
}
