<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBelanjaModalPengadaanGedungBludsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('belanja_modal_pengadaan_gedung_bluds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uraian')->nullable();
            $table->string('bulan')->nullable();
            $table->integer('tahun')->nullable();
            $table->integer('anggaran_bulanan_vol')->nullable();
            $table->integer('anggaran_bulanan_satuan')->nullable();
            $table->integer('anggaran_bulanan_harga_satuan')->nullable();
            $table->integer('anggaran_bulanan_jml_rp')->nullable();
            $table->integer('anggaran_bulanan_bertambahberkurang_rp')->nullable();
            $table->integer('anggaran_bulanan_bertambahberkurang_persen')->nullable();
            $table->integer('anggaran_prediksi_pengeluaran_vol')->nullable();
            $table->integer('anggaran_prediksi_pengeluaran_satuan')->nullable();
            $table->integer('anggaran_prediksi_pengeluaran_harga_satuan')->nullable();
            $table->integer('anggaran_prediksi_pengeluaran_jml_rp')->nullable();
            $table->integer('anggaran_prediksi_pengeluaran_bertambahberkurang_rp')->nullable();
            $table->integer('anggaran_prediksi_pengeluaran_bertambahberkurang_persen')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('belanja_modal_pengadaan_gedung_bluds');
    }
}
