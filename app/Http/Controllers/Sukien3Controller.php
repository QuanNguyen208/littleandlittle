<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Sukien3Controller extends Controller
{
    public function index()
    {
        return view('sukien3', ['title' => 'Su kien 3 page']);
    }
}