<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organization_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('niyukti_date')->nullable();
            $table->string('nirnaya_date')->nullable();
            $table->string('hajiri_date')->nullable();
            $table->string('sewa')->nullable();
            $table->string('samuha')->nullable();
            $table->string('upasamuha')->nullable();
            $table->string('shreni_taha')->nullable();
            $table->string('position')->nullable();
            $table->string('technical')->nullable();
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
        Schema::dropIfExists('organization_details');
    }
}
