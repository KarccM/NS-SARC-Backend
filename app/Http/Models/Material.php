<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public function stoke(){
        return $this->hasMany(Stoke::class);
    }
}
