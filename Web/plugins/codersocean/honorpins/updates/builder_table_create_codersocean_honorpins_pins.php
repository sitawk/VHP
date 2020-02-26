<?php namespace Codersocean\Honorpins\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCodersoceanHonorpinsPins extends Migration
{
    public function up()
    {
        Schema::create('codersocean_honorpins_pins', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('org_id')->unsigned();
            $table->integer('certificate_id')->unsigned();
            $table->string('image', 191);
            $table->string('title', 191);
            $table->text('template');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('codersocean_honorpins_pins');
    }
}
