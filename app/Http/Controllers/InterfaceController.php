<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Utils\Response;
use App\Models\Serie;

class InterfaceController extends Controller
{
    public function verificaTeste(Request $request){
        
        var_dump($request->all());
        return response()->json([
            'status'=> 200,
            'message'=> "SHOW DE BOLA"
        ]);
    }

    public function getDetalhes($id, $tipo){
        
        var_dump("TESTE");
        return response()->json([
            'status'=> 200,
            'message'=> "SHOW DE BOLA"
        ]);
    }

    public function getMovies(){
        
        $movies = Movie::all();
        if($movies){
            return Response::success('Sucesso', $movies);
        }else{
            return Response::faillure('Não foi possível encontrar os dados solicitados', null);
        }
        
    }

    public function getSeries(){
        
        $series = Serie::all();
        if($series){
            return Response::success('Sucesso', $series);
        }else{
            return Response::faillure('Não foi possível encontrar os dados solicitados', null);
        }
    }

    
}
