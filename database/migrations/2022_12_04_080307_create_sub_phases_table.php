<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubPhasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_phases', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('phase_id')->nullable();
            $table->text('des')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->tinyInteger('created_by')->nullable();
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
        Schema::dropIfExists('sub_phases');
    }
}
