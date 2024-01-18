<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    

    public $fillable = ['room_type_id','room_number'];


    public function room_type(){
        return $this->belongsTo('App\Room_type');
    }

    public function reserve(){
        return $this->belongsToMany('App\reserve');
    }
}
