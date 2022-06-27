<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pegawai_id');
            $table->foreign('pegawai_id')->references('id')->on('pegawais')->onDelete('cascade');
            $table->string('nip')->nullable();
            $table->string('pangkat')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('umur')->nullable();
            $table->string('tingkat_biaya_pd')->nullable();
            $table->string('maksud_pd')->nullable();
            $table->string('tempat_berangkat')->nullable();
            $table->string('tempat_tujuan')->nullable();
            $table->string('lama_pd')->nullable();
            $table->date('tanggal_berangkat')->nullable();
            $table->date('tanggal_kembali')->nullable();
            $table->string('pengikut')->nullable();
            $table->string('pembebanan_anggaran')->nullable();
            $table->date('tgl_doc_keluar')->nullable();
            $table->string('nomor_spd')->nullable();
            $table->string('nomor_spt')->nullable();
            $table->integer('biaya_penginapan')->nullable();
            $table->integer('biaya_uang_harian')->nullable();
            $table->integer('biaya_transport')->nullable();
            $table->integer('jumlah')->nullable();
            $table->string('beban_mak')->nullable();
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
        Schema::dropIfExists('documents');
    }
};
