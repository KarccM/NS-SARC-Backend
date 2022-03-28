<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalInfo as Personal;
use App\Http\Requests\RegisterRequest;

class PersonalInfoController extends Controller
{

    public function getFirstUser(){
        return Personal::first();
    }
    
    public function getUserById($id){
        return Personal::find($id);
    }

    public function store(RegisterRequest $req){
        $val = $req->validated();
        return Personal::create($val);
    }
}
