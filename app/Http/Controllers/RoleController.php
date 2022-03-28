<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Role;

class RoleController extends Controller
{
    public function storeRole(Request $req){
        Role::create([
            "name" => $req->name,
            "description" => $req->description,
            "active" => $req->active,
            "type" => $req->type,
        ]);
        return response()->json(["respone" => "Role Brother"]);
    }

    public function getRoles(Request $req){
        return Role::all();
    }
}
