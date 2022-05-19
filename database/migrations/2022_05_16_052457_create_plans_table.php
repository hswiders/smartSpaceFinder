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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('price', 8, 2);
            $table->longText('description');
            $table->string('addon_id');
            $table->boolean('email_notification')->default(0);
            $table->boolean('sms_notfication')->default(0);
            $table->string('type_of_sms_notification');
            $table->integer('number_of_property')->default(0);
            // $table->unsignedBigInteger('addon_id');
            // $table->foreign('addon_id')->references('id')->on('addons');
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
        Schema::dropIfExists('plans');
    }
};
