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
        Schema::create('interacoes', function (Blueprint $table) {
            $table->id();
            $table->timestamps(); // Define o 'created_at' & 'updated_at'
            $table->timestamp('datah_fim');
            $table->text('descricao');
            $table->foreignId('alvo_id')->constrained();
            $table->foreignId('estado_id')->constrained();
            $table->foreignId('chamado_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interacoes');
    }
};
