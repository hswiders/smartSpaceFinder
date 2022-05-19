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
        Schema::create('propertis_list', function (Blueprint $table) {
            $table->id();
            $table->string('property_heading');
            $table->integer('property_type')->comment('0=sale, 1=rent');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->integer('furnished')->comment('0=no, 1=yes');
            $table->integer('utilities')->comment('0=no, 1=yes');
            $table->integer('minimum_term');
            $table->integer('unit_type')->comment('0=seprate, 1=seprate_room_unit');
            $table->integer('bath_type')->comment('0=private, 1=shared');
            $table->integer('entrance_type')->comment('0=private entrance, 1=shared entrance');
            $table->integer('washer_and_dryer')->comment('0=in unit, 1=on the permises, 3=none');
            $table->integer('pets_allowed')->comment('0=no, 1=yes');
            $table->integer('monthly_rent');

            // $table->unsignedBigInteger('fee_id');
            // $table->foreign('fee_id')->references('id')->on('fees');
            $table->string('animities');
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
        Schema::dropIfExists('propertis_list');
    }
};
