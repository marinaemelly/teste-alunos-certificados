<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('matriculado')->nullabe();
            $table->date('datacadastro')->nullabe();
            $table->string('nome', 100)->nullabe();
            $table->string('email', 100)->nullabe();
            $table->string('senha', 20)->nullabe();
            $table->string('telefone', 25)->nullabe();
            $table->date('data_nascimento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}
