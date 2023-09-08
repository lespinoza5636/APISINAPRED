<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('coordinate_has_pregunatas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();            
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('coordinate_id')->unsigned();            
            $table->foreign('coordinate_id')->references('id')->on('coordinates');
            $table->bigInteger('question_id')->unsigned();            
            $table->foreign('question_id')->references('id')->on('questions');
            $table->bigInteger('grado_de_security_id')->unsigned();            
            $table->foreign('grado_de_security_id')->references('id')->on('grado_de_securitys');
            $table->bigInteger('mercado_id')->unsigned();            
            $table->foreign('mercado_id')->references('id')->on('mercados');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coordinate_has_pregunatas');
    }
};
