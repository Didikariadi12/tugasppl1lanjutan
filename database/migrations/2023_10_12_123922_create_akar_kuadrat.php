<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkarKuadrat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akar_kuadrat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('input');
            $table->unsignedBigInteger('angka');
            $table->unsignedBigInteger('waktu');
            $table->string('jenis');
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
        Schema::dropIfExists('akar_kuadrat');
    }
}
