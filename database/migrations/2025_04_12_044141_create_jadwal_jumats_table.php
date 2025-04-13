<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalJumatsTable extends Migration
{
    public function up()
    {
        Schema::create('jadwal_jumats', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal'); // Contoh: 2025-04-11
            $table->string('imam'); // Contoh: Ust. H. Ahmad Fauzi
            $table->string('muadzin'); // Contoh: M. Ridwan Nurhidayat
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jadwal_jumats');
    }
}