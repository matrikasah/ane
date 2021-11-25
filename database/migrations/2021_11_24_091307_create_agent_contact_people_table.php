<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentContactPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agent_contact_people', function (Blueprint $table) {
            $table->id();
            $table->string('keyStaff');
            $table->string('useragentname');
            $table->string('userinstname');
            $table->string('userinsttitle');
            $table->string('userinstphone');
            $table->string('userinstfax');
            $table->string('userinstemail');
            $table->bigInteger('agent_id');
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
        Schema::dropIfExists('agent_contact_people');
    }
}
