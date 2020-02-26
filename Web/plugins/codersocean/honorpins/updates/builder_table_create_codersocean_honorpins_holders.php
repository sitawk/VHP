<?php namespace Codersocean\Honorpins\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCodersoceanHonorpinsHolders extends Migration
{
    public function up()
    {
        Schema::create('codersocean_honorpins_holders', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('first_name', 191);
            $table->string('email', 191);
            $table->string('phone', 191);
            $table->string('image', 191);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('last_name', 191);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('codersocean_honorpins_holders');
    }
}
