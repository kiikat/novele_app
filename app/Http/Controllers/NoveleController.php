<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoveleController extends Controller
{
    public function index()
    {
        return view('home.blade.php');
    }
}