<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserve;
use App\Room;

class ReserveController extends Controller
{
    public function reserve(){
        $reserves = Reserve::all();
        return view('reserve.index', ['reserves'=>$reserves]);
    }
}
