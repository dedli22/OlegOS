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
        Schema::create('page_configs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('page_title');
            $table->boolean('page_offline');
            $table->string('page_offline_msg');
            $table->string('page_version');
            $table->integer('posts_per_page');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('page_configs');
    }
};
