<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('User_id');
            $table->string('image_path')->nullable();
            $table->string('Parent_brand');
            $table->string('Parent_model');
            $table->string('Parent_MY');
            $table->string('Parent_info');
            $table->string('Parent_serialnumber');
            $table->string('Parent_mileage')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parents');
    }
}
