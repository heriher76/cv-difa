<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutmeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutme', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->longText('description')->nullable();
            $table->string('study')->nullable();
            $table->string('university')->nullable();
            $table->string('hp')->nullable();
            $table->string('photo_profile')->nullable();
            $table->string('line')->nullable();
            $table->string('ig')->nullable();
            $table->string('in')->nullable();
            $table->string('fb')->nullable();
            $table->string('twitter')->nullable();
            $table->string('yt')->nullable();
            $table->string('wa')->nullable();
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
        Schema::dropIfExists('aboutme');
    }
}
