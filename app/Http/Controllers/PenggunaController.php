<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index(){
        $page = 'data-pengguna'; 
        return view('admin.data-pengguna', ['page' => $page]);
    }
}
