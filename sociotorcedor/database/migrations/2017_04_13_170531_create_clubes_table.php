<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubesTable extends Migration
{
    public function up()
    {
        Schema::create('clubes', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nome');
            $table->softDeletes();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('clubes');
    }
}
