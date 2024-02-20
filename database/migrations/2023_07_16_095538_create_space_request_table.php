<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpaceRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('space_request', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('space_request_id')->index();
            $table->string('space_owner_ref');
            $table->longText('requester_id');
            $table->string('date_start');
            $table->string('date_end');
            $table->string('is_request_approved');
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
        Schema::dropIfExists('space_request');
    }
}
