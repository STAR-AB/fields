<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'date_validation',
        'DDR',
        'DFR',
        'Prix',
        'status',
        'user_id',
        'field_id'
    ];
    public function field(){
        return $this->belongsTo(Field::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
