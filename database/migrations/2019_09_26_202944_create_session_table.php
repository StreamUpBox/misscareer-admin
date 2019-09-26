<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSessionTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Session', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('title');
            $table->longText('session');
            $table->longText('image');
            $table->longText('country');
            $table->date('date');
            $table->integer('numbering');
            $table->boolean('is_current_applying');
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
        Schema::drop('Session');
    }
}
