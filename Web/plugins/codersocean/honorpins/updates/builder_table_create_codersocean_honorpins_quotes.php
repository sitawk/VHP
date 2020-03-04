<?php namespace Codersocean\Honorpins\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCodersoceanHonorpinsQuotes extends Migration
{
    public function up()
    {
        Schema::create('codersocean_honorpins_quotes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 191);
            $table->string('email', 191);
            $table->string('phone', 1891);
            $table->text('messege');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('codersocean_honorpins_quotes');
    }
}
