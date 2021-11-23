<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantCourseDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant_course_details', function (Blueprint $table) {
            $table->id();
            $table->string('course_code')->nullable();
            $table->string('course_name')->nullable();
            $table->string('tuition_fee')->nullable();
            $table->string('enrollment_fee')->nullable();
            $table->string('material_fee')->nullable();
            $table->string('time')->nullable();
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
        Schema::dropIfExists('applicant_course_details');
    }
}
