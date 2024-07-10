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
        Schema::create('exemplaries', function (Blueprint $table) {
            $table->id();
            $table->string("codigo");
            $table->string("localizacion");

            // //creamos el campo para albergar la llave foranea
            // $table->unsignedBigInteger('reader_id')->unique();  //unica
            // $table->foreign('reader_id')
            //     ->references('id')
            //     ->on('readers')
            //     ->onDelete('cascade')             //get null para no borrar y no funcionar
            //     ->onUpdate('cascade');

            $table->unsignedBigInteger('book_id')->unique();  //unica
            $table->foreign('book_id')
                ->references('id')
                ->on('books')
                ->onDelete('cascade')             //get null para no borrar y no funcionar
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exemplaries');
    }
};
