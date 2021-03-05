<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_descriptions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->string('sex')->nullable();
            $table->string('religion')->nullable();
            $table->string('ethincity')->nullable();
            $table->string('huliya')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('mool')->nullable();
            $table->string('aadhibasi')->nullable();
            $table->string('madhesi')->nullable();
            $table->string('dalit')->nullable();
            $table->boolean('is_rural_disrict')->nullable();
            $table->string('rural_district')->nullable();
            $table->boolean('is_apaanga')->nulable();
            $table->string('apaanga_kisim')->nullable();
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
        Schema::dropIfExists('employee_descriptions');
    }
}
