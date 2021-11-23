<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;
    protected $useValidateRules = true;
    protected $rules = [
        "nome"          =>"required|string|max:100",
        "titulo"        =>"required|string|max:100",   
        "ano"           =>"required|integer",
        "categorias"    =>"nullable|string|max:50",
        "episodios"     =>"required|integer",
        "temporadas"    =>"required|integer",
        "sinopse"       =>"required|string",
        "elenco"        =>"required|string",
        "premios"       =>"nullable|string",
        "criador"       =>"required|string|max:100",
        "avaliacao"     =>"required|string|max:10",
        "trailer"       =>"nullable|string",
    ];

    protected $validationMessages = [
        "nome"          =>"O campo 'Nome' é obrigatório",
        "titulo"        =>"O campo 'Titulo' é obrigatório",   
        "ano"           =>"O campo 'Ano' é obrigatório",
        "episodios"     =>"O campo 'Episódios' é obrigatório",
        "temporadas"    =>"O campo 'Temporadas' é obrigatório",
        "sinopse"       =>"O campo 'Sinopse' é obrigatório",
        "elenco"        =>"O campo 'Elenco' é obrigatório",
        "criador"       =>"O campo 'Criador' é obrigatório",
        "avaliacao"     =>"O campo 'Avaliacao' é obrigatório",
    ];

    protected $table = 'LLDatabase.serie';
    protected $primaryKey = "id";

    protected $fillable = ["nome",      
                            "titulo",    
                            "ano",       
                            "categorias",
                            "episodios",
                            "temporadas",   
                            "sinopse",  
                            "elenco",   
                            "premios",   
                            "criador",  
                            "avaliacao", 
                            "trailer"   ];

    const CREATED_AT = "created_at";
    const CREATED_BY = "created_by";
    const UPDATED_AT = "updated_at";
    const UPDATED_BY = "updated_by";
}
