<?php

namespace App\Http\Controllers;
use App\Http\Models\WorkInfo;
use App\Http\Models\Role;
use App\Http\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class WorkInfoController extends Controller
{
    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store()
    {
        WorkInfo::create([
            "sarcPhone" => $req->sarcPhone,
            "role_id"=> $req->role_id,
        ]);
        return response()->json(["Hmm"=>"Check"] , 200);
    }

    public function storeUser(Request $req)
    {
        $usr = User::create([
            "name" => $req->usrname,
            "email" => $req->email,
            "password" => $req->password,
            "experience_id" => 1,
            "personal_id" => 1,
        ]);

        $work = new Work_Info();
        $work->point()->create([
            "name" => $rea->pname,
            "active" => true,
        ]);

        $usr->work_info()->associate($work);
        $usr->save();

        return response()->json($usr , 200);
    }
}
