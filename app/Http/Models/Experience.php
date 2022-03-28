<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\User;

class experience extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
}
