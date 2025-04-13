<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKasMasjidsTable extends Migration
{
    public function up()
    {
        Schema::create('kas_masjids', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal'); // Bisa harian/bulanan/tahunan
            $table->bigInteger('kas_awal')->default(0);
            $table->bigInteger('pemasukan')->default(0);
            $table->bigInteger('pengeluaran')->default(0);
            $table->bigInteger('kas_akhir')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kas_masjids');
    }
}
