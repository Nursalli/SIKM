<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index(){
        $page = 'dashboard'; 
        return view('admin.dashboard', ['page' => $page]);
    }
}
