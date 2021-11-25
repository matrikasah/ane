<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentBusinessHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agent_business_histories', function (Blueprint $table) {
            $table->id();
          $table->longText('how_long_operation');
          $table->longText('deal_area');
          $table->longText('totalnumber_student');
          $table->longText('country_student_send');
          $table->longText('student_in_austrila');
          $table->longText('partners');
          $table->longText('institutions');
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
        Schema::dropIfExists('agent_business_histories');
    }
}
