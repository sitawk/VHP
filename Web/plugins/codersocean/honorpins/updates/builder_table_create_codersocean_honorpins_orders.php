<?php namespace Codersocean\Honorpins\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCodersoceanHonorpinsOrders extends Migration
{
    public function up()
    {
        Schema::create('codersocean_honorpins_orders', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('org_id')->unsigned();
            $table->integer('certificate_id');
            $table->integer('pin_id')->default(0);
            $table->integer('pin_status')->default(0);
            $table->integer('order_status')->default(0);
            $table->integer('payment_status')->default(0);
            $table->integer('amount_paid')->default(0);
            $table->string('payment_method', 191);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('codersocean_honorpins_orders');
    }
}
