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
        Schema::create('chamados_alvos', function (Blueprint $table) {
           // $table->id();
           // $table->timestamps();
           $table->foreignId('chamado_id')->constrained('chamados');
           $table->foreignId('alvo_id')->constrained('alvos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chamados_alvos');
    }
};
