<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Workinfo;

class Role extends Model
{

    protected $fillable = [
        'name', 'description', 'active', "type"
    ];

    protected $table = "ROLE";

    public $timestamps = false;

    public function workinfo(){
        return $this->hasMany(Workinfo::class);
    }

    public function user(){
        return $this->hasManyThrough(('App\User'),Workinfo::class);
    }

}
