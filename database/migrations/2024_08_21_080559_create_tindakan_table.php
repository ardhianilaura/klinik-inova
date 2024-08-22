<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTindakanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tindakan', function (Blueprint $table) {
            $table->id(); // Otomatis membuat kolom 'id' sebagai PRIMARY KEY dengan AUTO_INCREMENT
            $table->string('nama_tindakan'); // Kolom VARCHAR(255)
            $table->decimal('biaya', 10, 2); // Kolom DECIMAL(10, 2)
            $table->timestamps(); // Menambahkan kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tindakan');
    }
}
