<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_location', function (Blueprint $table) {
            $table->id();
            $table->string('state');
            $table->string('city');
            $table->integer('zip');
            $table->longText('property_address');
            $table->integer('sublet')->default(0);
            $table->unsignedBigInteger('property_id');
            $table->foreign('property_id')->references('id')->on('propertis_list');
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
        Schema::dropIfExists('property_location');
    }
};
