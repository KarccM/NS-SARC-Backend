<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class router extends Model
{
    public function journey(){
        return $this->hasMany(Journey::class);
    }
}
