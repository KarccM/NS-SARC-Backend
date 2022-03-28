<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Point;
use App\interfaces\Ioptionable;

class PointController extends Controller implements Ioptionable
{

    public function storePoint(Request $req){
        Point::create([
            "name" => $req->name,
            "code" => $req->code,
            "active" => $req->active,
        ]);
        return response()->json(
            [
                "arabic"  => "تم تسجيل النقطة",
                "english" => "Point Has Stored",
                "data"    => []
            ]
        );
    }

    public function getAllData(Request $req){
        return Point::all();
    }

}
