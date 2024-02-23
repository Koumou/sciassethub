<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResearchProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('research_project', function (Blueprint $table) {
            $table->bigIncrements('research_project_id');
            $table->string('student_reference')->unique();
            $table->text('supervisor_title');
            $table->text('supervisor_name');
            $table->text('supervisor_email');
            $table->text('research_focus');
            $table->text('asset_category');
            $table->text('should_be_approved_by');
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
        Schema::dropIfExists('research_project');
    }
}
