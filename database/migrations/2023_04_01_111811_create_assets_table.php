<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->bigIncrements('asset_id');
            $table->text('user_reference');
            $table->text('asset_reference');
            $table->text('asset_name');
            $table->text('asset_category');
            $table->text('asset_current_location');
            $table->text('max_value');
            $table->text('min_value');
            $table->text('unit_measurement')->nullable();
            $table->text('chemical_formula');
            $table->text('general_use');
            $table->text('instruction');
            $table->text('warning_hazard')->nullable();
            $table->text('asset_image');
            $table->text('360_view');
            $table->text('ar_demo');
            $table->text('training_available');
            $table->text('department');
            $table->text('exp_date');
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
        Schema::dropIfExists('assets');
    }
}
