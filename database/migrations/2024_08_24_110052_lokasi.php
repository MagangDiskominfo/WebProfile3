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
        Schema::create('lokasi', function (Blueprint $table) {
            $table->id();
            $table->string('lokasi_link');
            $table->string('wilayah');
            $table->string('nomor_instansi');
            $table->string('email_instansi');
            $table->string('yt_link');
            $table->string('ig_link');
            $table->string('fb_link');
            $table->string('x_link');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
