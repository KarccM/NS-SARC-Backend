<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Workinfo;

class Section extends Model
{
    protected $fillable =["type"];

    public function workinfo(){
        return $this->hasMany(Workinfo::class);
    }

    public function user(){
        return $this->hasManyThrough(('App\User'),('App\Workinfo'));
    }
}
