<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function tabel(){
        return view('layout.table');
    }

    public function data(){
        return view('layout.data-table');
    }
}
