<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_request', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('asset_request_id')->index();
            $table->string('asset_owner_ref');
            $table->longText('requester_id');
            $table->unsignedTinyInteger('quantity');
            $table->string('tobetrained')->index();
            $table->string('is_request_approved')->index();
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
        Schema::dropIfExists('asset_request');
    }
}
