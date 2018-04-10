<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomCssesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_csses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('topbar_bgcolor')->nullable();
            $table->string('topbar_fontcolor')->nullable();
            $table->string('sidebar_bgcolor')->nullable();
            $table->string('sidebar_fontcolor')->nullable();
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
        Schema::dropIfExists('custom_csses');
    }
}
