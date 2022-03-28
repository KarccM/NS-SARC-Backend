<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Http\Models\User;
use App\Http\Models\Point;
use App\Http\Models\Role;
use App\Http\Models\Threats;
use App\Http\Models\Section;

class WorkInfo extends Model
{
    protected $fillable = [
        'point_id',
        'user_id',
        'section_id',
        'role_id',
    ];
    protected $table="work_info";

    public function threats(){
        return $this->hasMany(Threats::class);
    }

    public function point(){
        return $this->belongsTo(Point::class);
    }

    public function user(){
        return $this->belongsTo(USER::class);
    }

    public function section(){
        return $this->belongsTo(Section::class);
    }

    public function role(){
        return $this->belongsTo(ROLE::class);
    }
}
