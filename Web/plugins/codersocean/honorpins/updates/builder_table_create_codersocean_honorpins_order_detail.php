<?php namespace Codersocean\Honorpins\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCodersoceanHonorpinsOrderDetail extends Migration
{
    public function up()
    {
        Schema::create('codersocean_honorpins_order_detail', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('order_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('email', 191);
            $table->string('start_date', 191);
            $table->string('end_date', 191);
            $table->string('reg_number', 191);
            $table->string('phone', 191);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('codersocean_honorpins_order_detail');
    }
}
