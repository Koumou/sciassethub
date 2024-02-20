<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentSpaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rent_space', function (Blueprint $table) {
            $table->bigIncrements('rent_place_id');
            $table->text('user_reference');
            $table->text('rent_place_reference');
            $table->text('type_storage');
            $table->text('storage_brand');
            $table->text('storage_location_building');
            $table->text('accessiblity');
            $table->text('temperature_range_l');
            $table->text('temperature_range_h');
            $table->text('co2');
            $table->text('rent_duration');
            $table->text('availability_start');
            $table->text('availability_end');
            $table->text('additional_information');
            $table->text('frontal_img');
            $table->text('interior_img');
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
        Schema::dropIfExists('rent_space');
    }
}
