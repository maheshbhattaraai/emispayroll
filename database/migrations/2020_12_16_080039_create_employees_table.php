<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('nepali_name');
            $table->string('english_name');
            $table->string('epl_ref_no_nep');
            $table->string('epl_ref_no_eng');
            $table->string('photo');
            $table->string('hired_place');
            $table->string('bs_dob');
            $table->string('ad_dob');
            $table->string('citizenship_no');
            $table->string('verified_district');
            $table->string('verified_date');
            $table->string('english_father_name')->nullable();
            $table->string('nepali_father_name')->nullable();
            $table->string('father_job')->nullable();
            $table->string('english_grandfather_name')->nullable();
            $table->string('nepali_grandfather_name')->nullable();
            $table->string('grandfather_job')->nullable();
            $table->string('english_mother_name')->nullable();
            $table->string('nepali_mother_name')->nullable();
            $table->string('mother_job')->nullable();
            $table->string('english_spouce_name')->nullable();
            $table->string('nepali_spouce_name')->nullable();
            $table->string('spouce_job')->nullable();
            $table->string('no_of_sons')->nullable();
            $table->string('no_of_daughters')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
