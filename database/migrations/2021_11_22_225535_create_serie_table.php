<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSerieTable extends Migration
{
    public $tableName = 'serie';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nome', 100);
            $table->string('titulo', 100);
            $table->unsignedInteger('ano');
            $table->string('categorias')->nullable();
            $table->unsignedInteger('episodios');
            $table->unsignedInteger('temporadas');
            $table->text('sinopse');
            $table->text('elenco');
            $table->text('premios')->nullable();
            $table->string('criador', 100);
            $table->string('avaliacao', 10);
            $table->text('trailer')->nullable();
            $table->timestamps();
            $table->string('created_by', 50);

            $table->index(["id"], 'serie_idx');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
