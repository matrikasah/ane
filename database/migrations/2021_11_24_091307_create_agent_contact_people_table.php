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
            $table->string('keyStaff')->nullable();
            $table->string('useragentname')->nullable();
            $table->string('userinstname')->nullable();
            $table->string('userinsttitle')->nullable();
            $table->string('userinstphone')->nullable();
            $table->string('userinstfax')->nullable();
            $table->string('userinstemail')->nullable();
            $table->bigInteger('agent_id')->nullable();
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
