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
            $table->string('language_id')->nullable();
            $table->string('theme_version')->nullable();
            $table->string('website_title')->nullable();
            $table->string('base_color')->nullable();
            $table->string('header_logo')->nullable();
            $table->string('footer_logo')->nullable();
            $table->string('fav_icon')->nullable();
            $table->string('breadcrumb_image')->nullable();
            $table->string('number')->nullable();
            $table->string('email')->nullable();
            $table->string('contactemail')->nullable();
            $table->string('address')->nullable();
            $table->text('footer_text')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('copyright_text')->nullable();

            $table->text('messenger')->nullable();
            $table->text('disqus')->nullable();
            $table->text('add_this_status')->nullable();
            $table->text('facebook_pexel')->nullable();
            $table->text('google_analytics')->nullable();
            $table->string('announcement', 255)->nullable();
            $table->decimal('announcement_delay', 11, 2)->default(0.00);
            $table->text('maintainance_text')->nullable();
            $table->text('tawk_to')->nullable();
            $table->binary('cookie_alert_text')->nullable();
            $table->string('google_recaptcha_site_key')->nullable();
            $table->string('google_recaptcha_secret_key')->nullable();

            $table->tinyInteger('is_messenger')->default(1);
            $table->tinyInteger('is_disqus')->default(1);
            $table->tinyInteger('is_google_analytics')->default(1);
            $table->tinyInteger('is_add_this_status')->default(1);
            $table->tinyInteger('is_facebook_pexel')->default(1);
            $table->tinyInteger('is_announcement')->default(1);
            $table->tinyInteger('is_maintainance_mode')->default(1);
            $table->tinyInteger('is_blog_share_links')->default(1);
            $table->tinyInteger('is_tawk_to')->default(1);
            $table->string('is_recaptcha')->nullable();
            $table->tinyInteger('is_cooki_alert')->default(1);
          

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
