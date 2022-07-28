<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Sukien1Controller extends Controller
{
    public function index()
    {
        return view('sukien1', ['title' => 'Su kien 1 page']);
    }
}