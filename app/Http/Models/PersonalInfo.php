<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    protected $fillable = [
        "nat_id",
        "fst_nm",
        "lst_nm",
        "mdl_nm",
        "mthr_nm",
        "phone",
        "nat_id",
        "gender",
        "birth_place",
        "birth_date",
        "marital_status",
        "mobile",
        "certificate_type",
        "certificate_Details",
        "engName",
        "shoes_size",
        "waist_size",
        "shoulders_size",
       ];

    protected $table = "personal";

    public $timestamps = false;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
