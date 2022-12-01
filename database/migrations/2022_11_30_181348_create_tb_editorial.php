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
        Schema::create('tb_editorial', function (Blueprint $table) {
            $table->increments('idEditorial');
            $table->integer('isbn');
            $table->string('titulo');
            $table->string('autor');
            $table->integer('np');
            $table->string('editorial');
            $table->string('correo_Edi');
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
        Schema::dropIfExists('tb_editorial');
    }
};
