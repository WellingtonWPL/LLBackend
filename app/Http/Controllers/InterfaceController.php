<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InterfaceController extends Controller
{
    public function verificaTeste(Request $request){
        
        var_dump($request->all());
        return response()->json([
            'status'=> 200,
            'message'=> "SHOW DE BOLA"
        ]);
    }
}
