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
            $table->string('agency',255);
            $table->string('departure_station',255);
            $table->string('arrival_station',255);
            $table->date('departure_time');
            $table->date('arrival_time');
            $table->string('train_code',10)->unique();
            $table->tinyInteger('carriages')->unsigned();
            $table->boolean('in_time');
            $table->boolean('cancelled')->default(false);
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
