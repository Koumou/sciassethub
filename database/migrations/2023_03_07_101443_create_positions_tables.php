<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class CreatePositionsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->bigIncrements('position_id');
            $table->text('position_name');
            $table->timestamps();
        });

        DB::table('positions')->insert([
            [
                'position_name' => 'Academic staff', 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'position_name' => 'Postdoc/researcher', 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'position_name' => 'Technical staff', 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'position_name' => 'Support staff', 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'position_name' => 'Student', 'created_at' => now(), 'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('positions');
    }
}
