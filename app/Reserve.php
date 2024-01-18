<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Reserve extends Model
{
    protected $fillable = ['guest_id','number_of_people','check_in','check_out'];

    public function guest(){
        return $this->belongsTo('App\Guest');
    }

    public function room(){
        return $this->belongsToMany('App\Room','reserve_room','reserve_id','room_id')
        ->withPivot('stay_day','price');
    }
}
