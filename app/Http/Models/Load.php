<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class load extends Model
{
    public function stoke(){
        return $this->hasMany(Stoke::class);
    }
}
