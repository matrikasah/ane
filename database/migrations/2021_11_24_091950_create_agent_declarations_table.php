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
            $table->longText('declaration')->nullable();
            $table->string('agentprintname')->nullable();
            $table->string('agent_sign')->nullable();
            $table->string('agent_position')->nullable();
            $table->string('date')->nullable();
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
        Schema::dropIfExists('agent_declarations');
    }
}
