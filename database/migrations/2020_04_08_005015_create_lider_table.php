<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLiderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('lider', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cell', 30);
            $table->string('name', 30);
            $table->string('viceleader', 30);
            $table->string('host', 30);
            $table->string('secretary', 30);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('lider');
    }
}
