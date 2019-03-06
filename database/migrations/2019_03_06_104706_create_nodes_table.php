<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nodes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedInteger('left_child')->nullable();
            $table->foreign('left_child')->references('id')->on('nodes');

            $table->unsignedInteger('right_child')->nullable();
            $table->foreign('right_child')->references('id')->on('nodes');

            $table->string('username');
            $table->decimal('credits_left', 8,2);
            $table->decimal('credits_right', 8,2);

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
        Schema::dropIfExists('nodes');
    }
}
