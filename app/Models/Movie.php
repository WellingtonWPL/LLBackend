<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $useValidateRules = true;
    protected $rules = [
        "nome"          =>"required|string|max:100",
        "titulo"        =>"required|string|max:100",   
        "ano"           =>"required|integer",
        "categorias"    =>"nullable|string|max:50",
        "duracao"       =>"required|string|max:15",
        "sinopse"       =>"required|string",
        "elenco"        =>"required|string",
        "premios"       =>"nullable|string",
        "diretor"       =>"required|string|max:100",
        "avaliacao"     =>"required|string|max:10",
        "trailer"       =>"nullable|string",
    ];

    protected $validationMessages = [
        "nome"          =>"O campo 'Nome' é obrigatório",
        "titulo"        =>"O campo 'Titulo' é obrigatório",   
        "ano"           =>"O campo 'Ano' é obrigatório",
        "duracao"       =>"O campo 'Duração' é obrigatório",
        "sinopse"       =>"O campo 'Sinopse' é obrigatório",
        "elenco"        =>"O campo 'Elenco' é obrigatório",
        "diretor"       =>"O campo 'Diretor' é obrigatório",
        "avaliacao"     =>"O campo 'Avaliacao' é obrigatório",
    ];

    protected $table = 'LLDatabase.movie';
    protected $primaryKey = "id";

    protected $fillable = ["nome",      
                            "titulo",    
                            "ano",       
                            "categorias",
                            "duracao",   
                            "sinopse",  
                            "elenco",   
                            "premios",   
                            "diretor",  
                            "avaliacao", 
                            "trailer"   ];

    const CREATED_AT = "created_at";
    const CREATED_BY = "created_by";
    const UPDATED_AT = "updated_at";
    const UPDATED_BY = "updated_by";
}










