<?php

namespace App\tools;

use Illuminate\Http\Request;

class DefaultResponse {

    public static function response($arabic,$english,$data){
        return response()->json([
            "arabic" => $arabic,
            "englisg"=> $english,
            "data" => $data
        ]);
    }

}

?>
