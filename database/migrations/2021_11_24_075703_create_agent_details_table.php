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
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('givenname')->nullable();
            $table->string('address_in_aus')->nullable();
            $table->string('suburb')->nullable();
            $table->string('country')->nullable();
            $table->string('address_outside_aus')->nullable();
            $table->string('suburb_outside_aus')->nullable();
            $table->string('post_code')->nullable();
            $table->string('mobile_num')->nullable();
            $table->string('telephone_num')->nullable();
            $table->string('emergency_contact')->nullable();
            $table->string('emgy_address')->nullable();
            $table->string('emgy_telephone')->nullable();
            $table->string('abn')->nullable();
            $table->string('acn')->nullable();





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
