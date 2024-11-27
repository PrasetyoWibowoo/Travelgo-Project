<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiketsTable extends Migration
{
    public function up()
    {
        Schema::create('tikets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kendaraan_id');
            $table->string('nama');
            $table->integer('price');
            $table->integer('stocks');
            $table->string('tujuan');
            $table->string('image');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('tikets', function (Blueprint $table) {
            $table->dropColumn('price');
        });

        Schema::dropIfExists('tikets');
    }
}
