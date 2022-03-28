<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Team_members extends Model
{
    protected $table ="team-members";

    public function team(){
        return $this->belongsTo(team::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
