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
        Schema::table('users', function (Blueprint $table) {
            $table->string('firstName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('nickname')->nullable();
            $table->string('profile_picture')->default('http://localhost/images/users/no_profile_picture.png')->nullable();
            $table->string('gender')->nullable();
            $table->string('about')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('work')->nullable();

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
            $table->dropColumn('firstName');
            $table->dropColumn('lastName');
            $table->dropColumn('nickname');
            $table->dropColumn('profile_picture');
            $table->dropColumn('gender');
            $table->dropColumn('about');
            $table->dropColumn('country');
            $table->dropColumn('city');
            $table->dropColumn('work');
        });
    }
};
