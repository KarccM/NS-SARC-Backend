<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    public function members(){
        return $this->hasMany(Team_members::class);
    }
}
