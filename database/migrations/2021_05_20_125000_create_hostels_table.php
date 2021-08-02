<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostels', function (Blueprint $table) {
            $table->id();
            $table->string('picture')->nullable();
            $table->string('hostel_name');
            $table->string('hostel_type');
            $table->string('location');
            $table->string('agent');
            $table->integer('category_id');
            $table->string('water')->nullable();
            $table->string('washroom')->nullable();
            $table->string('kitchen')->nullable();
            $table->integer('no_of_rooms');
            $table->integer('capacity');
            $table->string('distance');
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('hostels');
    }
}
