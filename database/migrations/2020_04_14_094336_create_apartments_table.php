<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('title');
            $table->mediumText('description');
            $table->integer('number_of_rooms');
            $table->integer('number_of_bath');
            $table->integer('number_of_beds');
            $table->bigInteger('meters');
            $table->string('address');
            $table->float('latitude', 8, 6);
            $table->float('longitude', 9, 6);
            $table->float('price_for_night', 6, 2);
            $table->string('image_path');
            $table->boolean('published');
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
        Schema::dropIfExists('apartments');
    }
}
