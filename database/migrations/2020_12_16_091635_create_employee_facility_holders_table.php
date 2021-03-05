<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeFacilityHoldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_facility_holders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->string('facility_holder_name_nepali')->nullable();
            $table->string('facility_holder_name_english')->nullable();
            $table->string('facility_holder_relation')->nullable();
            $table->string('facility_holder_state')->nullable();
            $table->string('facility_holder_district')->nullable();
            $table->string('facility_holder_muncipality_vdc')->nullable();
            $table->string('facility_holder_ward_no')->nullable();
            $table->string('facility_holder_tole')->nullable();
            $table->string('facility_holder_house_no')->nullable();
            $table->string('facility_holder_citizenship_no')->nullable();
            $table->string('facility_holder_verified_district')->nullable();
            $table->string('facility_holder_verified_date')->nullable();
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
        Schema::dropIfExists('employee_facility_holders');
    }
}
