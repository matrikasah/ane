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
            $table->bigInteger('uid')->nullable();
            $table->string('stdsurname')->nullable();
            $table->string('stdgivenname')->nullable();
            $table->string('stdhomeaddress')->nullable();
            $table->string('stdsuburb')->nullable();
            $table->string('stdpostcode')->nullable();
            $table->string('stdtelnum')->nullable();
            $table->string('stdemail')->nullable();
            $table->string('stddob')->nullable();
            $table->string('sex')->nullable();
            $table->string('is_disable')->nullable();
            $table->string('disable')->nullable();
            $table->string('offshore_student')->nullable();          
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
