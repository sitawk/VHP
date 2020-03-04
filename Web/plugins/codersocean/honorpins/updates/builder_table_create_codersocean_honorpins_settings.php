<?php namespace Codersocean\Honorpins\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCodersoceanHonorpinsSettings extends Migration
{
    public function up()
    {
        Schema::create('codersocean_honorpins_settings', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('website_name', 191);
            $table->string('logo', 191);
            $table->string('fav_ico', 191);
            $table->string('banner_image', 191);
            $table->string('email', 191);
            $table->string('phone', 191);
            $table->string('pin', 191);
            $table->string('facebook', 191);
            $table->string('insta', 191);
            $table->string('twiter', 191);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('footer_about', 191);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('codersocean_honorpins_settings');
    }
}
