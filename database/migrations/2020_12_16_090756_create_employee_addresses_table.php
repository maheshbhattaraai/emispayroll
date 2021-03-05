<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->string('same_as_permanent')->nullable();
            $table->string('nepali_permanent_state')->nullable();
            $table->string('english_permanent_state')->nullable();
            $table->string('nepali_permanent_district')->nullable();
            $table->string('english_permanent_district')->nullable();
            $table->string('nepali_permanent_muncipality_vdc')->nullable();
            $table->string('english_permanent_muncipality_vdc')->nullable();
            $table->string('english_permanent_ward_no')->nullable();
            $table->string('nepali_permanent_ward_no')->nullable();
            $table->string('english_permanent_tole')->nullable();
            $table->string('nepali_permanent_tole')->nullable();
            $table->string('english_permanent_house_no')->nullable();
            $table->string('nepali_permanent_house_no')->nullable();
            $table->string('english_permanent_contact_no')->nullable();
            $table->string('nepali_permanent_contact_no')->nullable();
            $table->string('temporary_email')->nullable();
            $table->string('permanent_email')->nullable();
            $table->string('nepali_temporary_state')->nullable();
            $table->string('english_temporary_state')->nullable();
            $table->string('nepali_temporary_district')->nullable();
            $table->string('english_temporary_district')->nullable();
            $table->string('nepali_temporary_muncipality_vdc')->nullable();
            $table->string('english_temporary_muncipality_vdc')->nullable();
            $table->string('english_temporary_ward_no')->nullable();
            $table->string('nepali_temporary_ward_no')->nullable();
            $table->string('english_temporary_tole')->nullable();
            $table->string('nepali_temporary_tole')->nullable();
            $table->string('english_temporary_house_no')->nullable();
            $table->string('nepali_temporary_house_no')->nullable();
            $table->string('english_temporary_contact_no')->nullable();
            $table->string('nepali_temporary_contact_no')->nullable();
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
        Schema::dropIfExists('employee_addresses');
    }
}
