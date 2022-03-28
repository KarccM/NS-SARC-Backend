<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Section;

class SectionController extends Controller
{
    public function storeSection(Request $req){
        Section::create([
            "type" => $req->type,
        ]);
        return response()->json(["respone" => "Section Brother"]);
    }

    public function getSections(Request $req){
        return Section::all();
    }
}
