<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('language_id')->default(0);
            $table->tinyInteger('status')->nullable();
            $table->string('image')->nullable();
            $table->string('name')->nullable();
            $table->string('dagenation')->nullable();
            $table->text('description')->nullable();
            $table->integer('serial_number')->default(0);
            $table->string('icon1')->nullable();
            $table->string('icon2')->nullable();
            $table->string('icon3')->nullable();
            $table->string('icon4')->nullable();
            $table->string('icon5')->nullable();
            $table->string('url1')->nullable();
            $table->string('url2')->nullable();
            $table->string('url3')->nullable();
            $table->string('url4')->nullable();
            $table->string('url5')->nullable();
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
        Schema::dropIfExists('teams');
    }
}