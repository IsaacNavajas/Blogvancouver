<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class wellcome extends Controller
{
    public function index () {
        return view('welcome');
    }
}
