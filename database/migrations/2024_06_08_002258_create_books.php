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
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on(table:'users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('autor');
            $table->string('titulo');
            $table->string('subtitulo')->nullable();
            $table->string('edição');
            $table->string('editora');
            $table->integer('ano_da_publicação');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
