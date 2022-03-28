<?php

namespace App\Http\Models;


use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use App\Http\Controllers\Tester;


class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    protected $table = "users";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'experience_id',
        'personal_id',
        'work_info_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function work_info(){
        return $this->hasOne(Workinfo::class);
    }

    public function experience(){
        return $this->hasMany(Experience::class);
    }

    public function personal(){
        return $this->hasOne(PersonalInfo::class);
    }

    public function section(){
        return $this->hasOneThrough(('App\Section'),('App\Workinfo'));
    }

    public function nothing(){
        return new Tester();
    }

    public function role(){
        // return $this->hasOneThrough(('App\Role'),('App\Workinfo'));

        $role = DB::table('role')->join('work_info',function ($join){
            $join->on('role.id','=','work_info.id')
                    ->where('work_info.user_id', '=' , 1 );
        })->get();

        return $role;
    }

    public function threats(){
        return $this->work_info()->threats();
    }

    public function point(){
        return $this->work_info()->point();
    }

    public function team_member(){
        return $this->hasMany(teammember::class);
    }

}
