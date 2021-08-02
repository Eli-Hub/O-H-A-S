<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOccupantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('occupants', function (Blueprint $table) {
            $table->id();
            $table->string('picture')->nullable();
            $table->string('name_stud');
            $table->string('phone_stud');
            $table->string('email_stud');
            $table->string('dob');
            $table->string('country');
            $table->string('region');
            $table->string('residence');
            $table->string('sch_name');
            $table->string('index');
            $table->string('room_no')->nullable();
            $table->string('guardian')->nullable();
            $table->string('guard_phone')->nullable();
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
        Schema::dropIfExists('occupants');
    }
}
