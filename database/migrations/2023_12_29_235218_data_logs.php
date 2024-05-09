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

        Schema::create('data_logs', function (Blueprint $table) {
            $table->id('idlog');
            $table->string('utc');
            $table->time('waktu');
            $table->date('tanggal');
            $table->string('nama');
            $table->String('penelpon');
            $table->string('no_telp');
            $table->string('onduty');
            $table->text('catatan');
            $table->timestamps();
        });
        Schema::create('data_incidents', function (Blueprint $table) {
            $table->id('idincident');
            $table->unsignedBigInteger('data_logs_id');
            $table->string('maskapai');
            $table->string('call_sign');
            $table->string('tipe_pesawat');
            $table->String('runway');
            $table->text('jenis_kerusakan');
            $table->string('eta');
            $table->string('pob');
            $table->string('fuel');
            $table->string('barang_berbahaya');
            $table->foreign('data_logs_id')->references('idlog')->on('data_logs')->onDelete('cascade');
            $table->timestamps();
        });
        
        Schema::create('data_fires', function (Blueprint $table) {
            $table->id('idfire');
            $table->unsignedBigInteger('data_logs_id');
            $table->String('sumber');
            $table->text('lokasi');
            $table->text('keterangan');
            $table->foreign('data_logs_id')->references('idlog')->on('data_logs')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('data_moves', function (Blueprint $table) {
            $table->id('idmove');
            $table->unsignedBigInteger('data_logs_id');
            $table->string('bergerak');
            $table->string('tiba_tkp');
            $table->string('control_time');
            $table->string('rescue_time')->nullable();
            $table->string('extinguish_time')->nullable();
            $table->string('kembali_fs');
            $table->string('stop_time');
            $table->string('sebelum');
            $table->string('sesudah')->nullable();
            $table->foreign('data_logs_id')->references('idlog')->on('data_logs')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('data_medics', function (Blueprint $table) {
            $table->id('idmedic');
            $table->unsignedBigInteger('data_logs_id');
            $table->enum('sumber',['Di Pesawat','Di Terminal']);
            $table->string('maskapai')->nullable();
            $table->string('call_sign')->nullable();
            $table->string('lokasi');
            $table->string('eta')->nullable();
            $table->text('kondisi');
            $table->String('jenis_kelamin');
            $table->String('kesadaran');
            $table->String('bernafas');
            $table->String('telepon_ambulan');
            $table->foreign('data_logs_id')->references('idlog')->on('data_logs')->onDelete('cascade');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_logs');
        Schema::dropIfExists('data_moves');
        Schema::dropIfExists('data_incidents');
        Schema::dropIfExists('data_medics');
        Schema::dropIfExists('data_fires');
    }
};
