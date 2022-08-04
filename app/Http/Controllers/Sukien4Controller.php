<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Sukien4Controller extends Controller
{
    public function index()
    {
        return view('sukien4', ['title' => 'Su kien 4 page']);
    }
}