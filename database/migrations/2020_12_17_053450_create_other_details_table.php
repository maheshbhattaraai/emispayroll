<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtherDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('other_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->string('bahu_bibaha')->nullable();
            $table->string('baal_bibaha')->nullable();
            $table->string('is_spouce_app_pr')->nullable();
            $table->string('is_spouce_in_other_country')->nullable();
            $table->string('country_name')->nullable();
            $table->string('date')->nullable();
            $table->string('pending_payment_government')->nullable();
            $table->string('reason')->nullable();
            $table->text('experience_qualification')->nullable();
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
        Schema::dropIfExists('other_details');
    }
}
