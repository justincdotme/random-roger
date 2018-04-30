<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRogersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rogers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('nick_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('mug');
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
        Schema::dropIfExists('rogers');
    }
}
