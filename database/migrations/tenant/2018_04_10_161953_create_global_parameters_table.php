<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGlobalParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('global_parameters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenant_customcss')->nullable();
            $table->string('tenant_large_logo')->nullable();
            $table->string('tenant_small_logo')->nullable();
            $table->string('tenant_favicon')->nullable();
            $table->string('tenant_webclip')->nullable();
            $table->string('tenant_sitename')->nullable();
            $table->string('tenant_site_slogan')->nullable();
            $table->integer('tenant_type_id')->nullable();
            $table->string('tenant_website')->nullable();
            $table->string('tenant_representative')->nullable();
            $table->string('tenant_topbar_logo')->nullable();
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
        Schema::dropIfExists('global_parameters');
    }
}
