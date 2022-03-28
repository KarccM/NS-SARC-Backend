<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
 
use Illuminate\Http\Request;

class Tester extends Controller
{
     /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::select('select * from RD_USERS where active = ?', [1]);
 
        return view('user.index', ['users' => $users]);
    }
}
