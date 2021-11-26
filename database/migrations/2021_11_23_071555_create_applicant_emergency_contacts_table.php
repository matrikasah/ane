<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantEmergencyContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant_emergency_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('fullName')->nullable();
            $table->string('relationship')->nullable();
            $table->string('contactNum')->nullable();
            $table->string('mobile')->nullable();
            $table->string('emergency_pay')->nullable();
            $table->bigInteger('applicant_id')->nullable();
            


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
        Schema::dropIfExists('applicant_emergency_contacts');
    }
}
