<?php namespace Codersocean\Honorpins\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCodersoceanHonorpinsHolderPins extends Migration
{
    public function up()
    {
        Schema::create('codersocean_honorpins_holder_pins', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('holder_id')->unsigned();
            $table->integer('org_id')->unsigned();
            $table->integer('certificate_id')->unsigned();
            $table->string('start_date', 191);
            $table->string('end_date', 191);
            $table->string('reg_number', 191);
            $table->integer('pin_id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('codersocean_honorpins_holder_pins');
    }
}
