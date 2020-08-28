<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name_site');
            $table->string('logo');
            $table->string('favicon');
            $table->string('whatsapp');
            $table->string('phone_1');
            $table->string('phone_2');
            $table->string('phone_3');
            $table->text('address');
            $table->text('google_maps');
            $table->text('facebook_link');
            $table->string('copyright');
            $table->integer('order')->default(0);
            $table->boolean('status');
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
        Schema::dropIfExists('settings');
    }
}
