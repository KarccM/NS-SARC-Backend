<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\models\Role;
use App\Http\models\Section;
use App\Http\models\Point;
use App\tools\DefaultResponse;


class options extends Controller
{
    public function getOptions(Request $req){

        $r=new Role();
        $s=new Point();
        $p=new Section();

        $data=[
            "role" => $r->all(),
            "section" => $s->all(),
            "point" => $p->all()
        ];

        return DefaultResponse::response("","",$data);
    }
}
