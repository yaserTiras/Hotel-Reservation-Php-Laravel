<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('user_id');
            $table->integer('hotel_id');
            $table->integer('room_id');
            $table->string('name',50);
            $table->string('surname',50);
            $table->string('email',50);
            $table->string('phone',20);
            $table->float('total');
            $table->datetime('checkin');
            $table->datetime('checkout');
            $table->string('days',20);
            $table->string('message',255);
            $table->string('note',255);
            $table->string('status',5)->nullable()->default('New');
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
        Schema::dropIfExists('reservations');
    }
}
