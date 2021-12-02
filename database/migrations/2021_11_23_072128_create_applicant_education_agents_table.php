<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantEducationAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant_education_agents', function (Blueprint $table) {
            $table->id();
            $table->string('apply_through_agent')->nullable();
            $table->string('orgName')->nullable();
            $table->string('agentCnum')->nullable();
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
        Schema::dropIfExists('applicant_education_agents');
    }
}
