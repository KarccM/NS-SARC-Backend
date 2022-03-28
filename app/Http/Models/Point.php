<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\User;
use App\Http\Workinfo;

class point extends Model
{
    protected $fillable = [
        'name',
        'active',
        'code',
    ];

    public $timestamps = false;


    public function workinfo(){
        return $this->hasMany(Workinfo::class);
    }

    public function user(){
        return $this->hasMany(Workinfo::class)->user();
    }

}
