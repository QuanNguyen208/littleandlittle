<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Sukien2Controller extends Controller
{
    public function index()
    {
        return view('sukien2', ['title' => 'Su kien 2 page']);
    }
}