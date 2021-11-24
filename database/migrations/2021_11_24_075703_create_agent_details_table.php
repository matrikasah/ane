<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agent_details', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('givenname');
            $table->string('address_in_aus');
            $table->string('suburb');
            $table->string('country');
            $table->string('address_outside_aus');
            $table->string('post_code');
            $table->string('mobile_num');
            $table->string('telephone_num');
            $table->string('emergency_contact');
            $table->string('emgy_address');
            $table->string('emgy_telephone');





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
        Schema::dropIfExists('agent_details');
    }
}
