<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class stoke extends Model
{
    protected $table="stoke";

    public function load(){
        return $this->belongsTo(Load::class);
    }

    public function provider(){
        return $this->belongsTo(Provider::class);
    }

    public function material(){
        return $this->belongsTo(Material::class);
    }
}
