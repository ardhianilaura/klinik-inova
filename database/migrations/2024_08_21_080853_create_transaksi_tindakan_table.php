<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTindakanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_tindakan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pendaftaran_id');
            $table->unsignedBigInteger('tindakan_id');
            $table->unsignedBigInteger('obat_id');
            $table->integer('jumlah_obat');
            $table->decimal('total_biaya', 10, 2);
            $table->timestamps();

            $table->foreign('pendaftaran_id')->references('id')->on('pendaftaran');
            $table->foreign('tindakan_id')->references('id')->on('tindakan');
            $table->foreign('obat_id')->references('id')->on('obat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi_tindakan');
    }
}
