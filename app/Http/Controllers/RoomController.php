<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $allRooms = ['single ', 'double', 'studio', 'suite']; 
 
        return view('home', ['rooms' => $allRooms]); 
    }
}