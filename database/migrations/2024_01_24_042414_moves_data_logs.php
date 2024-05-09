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
        Schema::create('moves_data_logs', function (Blueprint $table) {
            $table->id('idonmove');
            $table->unsignedBigInteger('moves_id')->unsigned();
            $table->unsignedBigInteger('data_logs_id')->unsigned();
            $table->timestamps();

            $table->foreign('moves_id')->references('idmove')->on('data_moves')->onDelete('cascade');
            $table->foreign('data_logs_id')->references('idlog')->on('data_logs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('moves_data_logs');
    }
};
