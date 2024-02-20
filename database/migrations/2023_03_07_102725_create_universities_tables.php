<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateUniversitiesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universities', function (Blueprint $table) {
            $table->bigIncrements('university_id');
            $table->text('university_name');
            $table->text('physical_address');
            $table->timestamps();
        });

        DB::table('universities')->insert([
            [
                'university_name' => 'University of the Western Cape', 'physical_address' => 'Robert Sobukwe Rd, Bellville, Cape Town, 7535', 'created_at' => now(), 'updated_at' => now(),
            ],
            // [
            //     'university_name' => 'University of Cape Town', 'physical_address' => 'Rondebosch, Cape Town, 7700, Cape Town, 7535', 'created_at' => now(), 'updated_at' => now(),
            // ],
            // [
            //     'university_name' => 'Stellenbosch University', 'physical_address' => 'Stellenbosch Central, Stellenbosch', 'created_at' => now(), 'updated_at' => now(),
            // ],
            // [
            //     'university_name' => 'Cape Peninsula University of Technology', 'physical_address' => '-', 'created_at' => now(), 'updated_at' => now(),
            // ],

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('universities');
    }
}
