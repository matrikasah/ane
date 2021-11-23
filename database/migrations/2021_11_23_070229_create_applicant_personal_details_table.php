<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantPersonalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant_personal_details', function (Blueprint $table) {
            $table->id();
            $table->string('stdsurname');
            $table->string('stdgivenname');
            $table->string('stdhomeaddress');
            $table->string('stdsuburb');
            $table->string('stdpostcode');
            $table->string('stdtelnum');
            $table->string('stdemail');
            $table->string('stddob');
            $table->string('sex');
            $table->string('is_disable');
            $table->string('disable');
            $table->string('offshore_student');          
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
        Schema::dropIfExists('applicant_personal_details');
    }
}
