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

    public function show($tipo, $id){
        if($tipo == 'MOVIE'){
            $movie = Movie::find($id);
            if($movie){
                return Response::success('Sucesso', $movie);
            }else{
                return Response::faillure('Não foi possível encontrar os dados solicitados', null);
            }
        }else if($tipo == 'SERIE'){
            $serie = Serie::find($id);
            if($serie){
                return Response::success('Sucesso', $serie);
            }else{
                return Response::faillure('Não foi possível encontrar os dados solicitados', null);
            } 
        }else{
            return Response::faillure('Não foi possível encontrar os dados solicitados', null);
        }
        
        
    }

    public function getMovies(){
        
        $movies = Movie::select('id')->get();
        if($movies){
            return Response::success('Sucesso', $movies);
        }else{
            return Response::faillure('Não foi possível encontrar os dados solicitados', null);
        }
        
    }

    public function getSeries(){
        
        $series = Serie::select('id')->get();
        if($series){
            return Response::success('Sucesso', $series);
        }else{
            return Response::faillure('Não foi possível encontrar os dados solicitados', null);
        }
    }

    
}
