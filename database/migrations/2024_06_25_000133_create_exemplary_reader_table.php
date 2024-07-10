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
        Schema::create('exemplary_reader', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('exemplary_id')->nullable();
            $table->unsignedBigInteger('reader_id')->nullable();

            $table->foreign('exemplary_id')
            ->references('id')
            ->on('exemplaries')->onDelete('cascade');

            $table->foreign('reader_id')
            ->references('id')
            ->on('readers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exemplary_reader');
    }
};
