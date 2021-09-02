<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKreditTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kredit', function (Blueprint $table) {
            $table->integer('id_kredit');
            $table->string('id_pembeli');
            $table->string('id_motor');
            $table->string('tanggal_transaksi');
            $table->string('tenor');
            $table->string('uang_muka');
            $table->string('cicilan_perbulan');
            $table->string('sisa_cicilan');
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
        Schema::dropIfExists('kredit');
    }
}
