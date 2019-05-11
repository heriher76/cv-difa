<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMybioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mybio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('street')->nullable();
            $table->string('address')->nullable();
            $table->string('handphone')->nullable();
            $table->string('photo_profile')->nullable();
            $table->string('photo_background')->nullable();
            $table->string('name')->nullable();
            $table->string('born')->nullable();
            $table->string('status')->nullable();
            $table->string('work_at')->nullable();
            $table->string('ig')->nullable();
            $table->string('in')->nullable();
            $table->string('fb')->nullable();
            $table->string('twitter')->nullable();
            $table->string('github')->nullable();
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
        Schema::dropIfExists('mybio');
    }
}
