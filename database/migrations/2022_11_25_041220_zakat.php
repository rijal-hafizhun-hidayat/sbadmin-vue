<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Zakat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zakat', function (Blueprint $table) {
            $table->id();
            $table->string('muzakki');
            $table->string('jenis_zakat');
            $table->string('nominal');
            $table->string('bukti');
            $table->boolean('konfirmasi');
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
        Schema::dropIfExists('zakat');
    }
}
