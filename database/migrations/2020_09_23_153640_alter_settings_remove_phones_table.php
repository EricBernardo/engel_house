<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterSettingsRemovePhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn('phone_ads');
            $table->dropColumn('whatsapp_ads');
            $table->dropColumn('phone_2');
            $table->dropColumn('phone_3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->string('phone_ads')->nullable();
            $table->string('whatsapp_ads')->nullable();
            $table->string('phone_2');
            $table->string('phone_3');
        });
    }
}
