<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Permohonan extends Controller
{
    public function index(){
        $page = 'data-permohonan';
        return view('admin.data-permohonan', ['page' => $page]);
    }
}
