<?php

namespace App\Http\Models;
use App\Http\Workinfo;

use Illuminate\Database\Eloquent\Model;

class threats extends Model
{
    public function workinfo(){
        return $this->hasMany(Workinfo::class);
    }

    public function user(){
        return $this->hasMany(Workinfo::class)->user();
    }
}
