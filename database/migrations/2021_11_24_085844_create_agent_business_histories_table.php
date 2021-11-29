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
          $table->longText('how_long_operation')->nullable();
          $table->longText('deal_area')->nullable();
          $table->longText('totalnumber_student')->nullable();
          $table->longText('country_student_send')->nullable();
          $table->longText('student_in_austrila')->nullable();
          $table->longText('partners')->nullable();
          $table->longText('institutions')->nullable();
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
        Schema::dropIfExists('agent_business_histories');
    }
}
