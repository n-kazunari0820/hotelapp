<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room_type;

class Room_typeController extends Controller
{
    public function index(){
        $items = Room_type::all();

        return view('room_type.index', ['items'=>$items]);
    }
}
