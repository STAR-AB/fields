<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'address',
        'charge',
        'status'
    ];
    public function user (){
        return $this->belongsTo(User::class);
    }
    public function image (){
        return $this->hasMany(Image::class);
    }
    public function reservation (){
        return $this->hasMany(Reservation::class);
    }
}
