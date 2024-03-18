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
        Schema::create('keberatans', function (Blueprint $table) {
            $table->id();
            $table->string('tujuan');
            $table->string('nama');
            $table->string('no_tlp');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('nama_yg_dikuasakan');
            $table->string('email_yg_dikuasakan');
            $table->string('no_tlp_yg_dikuasakan');
            $table->string('pekerjaan_yg_dikuasakan');
            $table->string('alamat_yg_dikuasakan');
            $table->string('surat_kuasa');
            $table->string('alasan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keberatans');
    }
};
