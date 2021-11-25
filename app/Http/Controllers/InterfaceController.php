<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Utils\Response;
use App\Models\Serie;

class InterfaceController extends Controller
{
   
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

    public function search($criterio = ''){
        $movieName = Movie::select('id')->where('nome', 'like', '%' . $criterio . '%');
        $movieTille = Movie::select('id')->where('titulo', 'like', '%' . $criterio . '%');
        $movieActors = Movie::select('id')->where('elenco', 'like', '%' . $criterio . '%');
        $movies = Movie::select('id')->where('diretor', 'like', '%' . $criterio . '%')
                        ->union($movieActors)
                        ->union($movieTille)
                        ->union($movieName)
                        ->get();
        $serieName = Serie::select('id')->where('nome', 'like', '%' . $criterio . '%');
        $serieTille = Serie::select('id')->where('titulo', 'like', '%' . $criterio . '%');
        $serieActors = Serie::select('id')->where('elenco', 'like', '%' . $criterio . '%');
        $series = Serie::select('id')->where('criador', 'like', '%' . $criterio . '%')
                        ->union($serieActors)
                        ->union($serieTille)
                        ->union($serieName)
                        ->get();
        $result = [
            'series' => $series,
            'movies' => $movies
        ];

        return Response::success('Sucesso', $result);
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
