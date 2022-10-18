<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->double("preco");
            $table->integer("quantidade");
            $table->timestamps();

            $table->unsignedInteger("categorias_id");
            $table->foreign("categorias_id")
                ->references("id")
                ->on("categorias");
            $table->unsignedInteger("fornecedores_id");
            $table->foreign("fornecedores_id")
                ->references("id")
                ->on("fornecedores");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
};
