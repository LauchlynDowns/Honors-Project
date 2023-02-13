<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('components', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Parent_Id');
            $table->string('Component_brand');
            $table->text('Component_model');
            $table->text('Component_info');
            $table->string('Component_year');
            $table->string('Component_creationdate');
            $table->string('Component_miles')->nullable();
            $table->string('Component_hours')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('components');
    }
}
