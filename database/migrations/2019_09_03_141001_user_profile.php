<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->string('avatar')->default("default_avatar.gif");
            $table->string('phone_number')->default("Empty");
            $table->string('career')->default("Empty");
            $table->string('address')->default("Empty");
            $table->string('city_country')->default("Empty");
            $table->text('bio')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->dropColumn('avatar');
            $table->dropColumn('phone_number');
            $table->dropColumn('career');
            $table->dropColumn('address');
            $table->dropColumn('city_country');
            $table->dropColumn('bio');


        });
    }
}
