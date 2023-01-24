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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name');
            $table->string('site_logo');
            $table->string('slider_title');
            $table->string('about_us_title');
            $table->text('about_us_description');
            $table->string('about_us_image');
            $table->string('service_title');
            $table->text('service_description');
            $table->text('slider_description');
            $table->string('blog_title');
            $table->text('blog_description');
            $table->string('slider_image');
            $table->string('slider_video_link');
            $table->string('site_mobile');
            $table->string('site_email');
            $table->string('site_address');
            $table->string('site_schedule');
            $table->string('footer_logo');
            $table->string('footer_description');
            $table->text('who_are_you');
            $table->text('our_vision');
            $table->text('our_history');
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
};
