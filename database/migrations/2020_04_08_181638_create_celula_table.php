<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCelulaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('celula', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 30);
            $table->string('leader', 30);
            $table->string('viceleader', 30);
            $table->decimal('offers', 3,2);
            $table->string('date', 15);
            $table->string('start', 10);
            $table->string('finish', 10);
            $table->string('members', 10);
            $table->string('visitors', 10);
            $table->string('total', 10);
            $table->string('decisions', 10);
            $table->string('testimonials', 60);
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
         Schema::drop('celula');
    }
}
