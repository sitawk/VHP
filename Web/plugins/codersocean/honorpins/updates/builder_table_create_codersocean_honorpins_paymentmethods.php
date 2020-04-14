<?php namespace Codersocean\Honorpins\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCodersoceanHonorpinsPaymentmethods extends Migration
{
    public function up()
    {
        Schema::create('codersocean_honorpins_paymentmethods', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('cus_id', 191);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('last_digit', 191);
            $table->string('ex_date', 191);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('codersocean_honorpins_paymentmethods');
    }
}
