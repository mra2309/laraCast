<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVidiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vidios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('playlist_id');
            $table->string('title');
            $table->string('slug');
            $table->string('resource');
            $table->string('uniq_vidio_id');
            $table->integer('episode');
            $table->string('runtime');
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
        Schema::dropIfExists('vidios');
    }
}
