<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentDeclarationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agent_declarations', function (Blueprint $table) {
            $table->id();
            $table->longText('declaration');
            $table->string('agentprintname');
            $table->string('agent_sign');
            $table->string('agent_position');
            $table->string('date');
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
        Schema::dropIfExists('agent_declarations');
    }
}
