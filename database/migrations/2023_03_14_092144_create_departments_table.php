<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->bigIncrements('department_id');
            $table->text('department_name');
            $table->timestamps();
        });

        DB::table('departments')->insert([
            [
                'department_name' => 'Department of Biodiversity and Conservation Biology' , 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'department_name' => 'Department of Biotechnology', 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'department_name' => 'Department of Chemistry' , 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'department_name' => 'Department of Computer Science' , 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'department_name' => 'Department of Mathematics and Applied Mathematics' , 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'department_name' => 'Department of Medical Biosciences' , 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'department_name' => 'Department of Physics and Astronomy' , 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'department_name' => 'Department of Statistics and Population Studies' , 'created_at' => now(), 'updated_at' => now(),
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
        Schema::dropIfExists('departments');
    }
}
