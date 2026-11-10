<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;

class Image extends Model
{
    protected $fillable = [
        'path',
        'field_id',
        'is_primary'
    ];
    public function field(){
        return $this->belongsTo(Field::class);
    }
}
