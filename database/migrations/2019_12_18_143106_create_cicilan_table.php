<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCicilanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cicilan', function (Blueprint $table) {
            $table->integer('id_cicilan');
            $table->string('id_kredit');
            $table->string('nama_pembeli');
            $table->string('tanggal_bayar');
            $table->string('bayar');
            $table->string('total_bayar');
            $table->string('sisa_cicilan');
            $table->string('sisa_saat_ini');
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
        Schema::dropIfExists('cicilan');
    }
}
