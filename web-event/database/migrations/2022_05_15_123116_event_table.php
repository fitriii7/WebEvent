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
        Schema::create('event', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category');
            $table->mediumText('location');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->string('image');
            $table->mediumText('event_summ');
            $table->mediumText('event_desc');
            $table->integer('capacity');
            $table->integer('price');
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
        Schema::dropIfExists('event');
    }
};
