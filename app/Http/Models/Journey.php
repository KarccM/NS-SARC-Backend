<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class journey extends Model
{
    public function router(){
        return $this->belongsTo(Router::class);
    }
}
