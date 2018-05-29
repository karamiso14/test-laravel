<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NanachiController extends Controller
{
    public function index() {
        return view('nanachi.index');
    }
}
