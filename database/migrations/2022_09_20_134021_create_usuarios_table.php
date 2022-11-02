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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->timestamps(); // Define o 'created_at' & 'updated_at'
            $table->string('nome');
            $table->string('nome_usr');
            // $table->foreignId('perfil_id')->constrained('perfis');
            // $table->foreignId('setor_id')->constrained('setores');
			$table->string('email')->unique();
			$table->string('password');
			$table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};
