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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            // aggiungo colonne
            $table->string('company', 50);
            $table->string('station_start', 50);
            $table->string('station_arrive', 50);
            $table->time('time_start_at');
            $table->time('time_arrive_at');
            $table->string('train_code', 10);
            $table->smallInteger('coach_numbers')->unsigned();
            $table->boolean('ontime');
            $table->boolean('deleted');

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
        Schema::dropIfExists('trains');
    }
};
