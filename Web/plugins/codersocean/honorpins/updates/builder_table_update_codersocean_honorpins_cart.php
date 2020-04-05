<?php namespace Codersocean\Honorpins\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCodersoceanHonorpinsCart extends Migration
{
    public function up()
    {
        Schema::table('codersocean_honorpins_cart', function($table)
        {
        
            $table->dropColumn('order_id');
        });
    }
    
    public function down()
    {
        Schema::table('codersocean_honorpins_cart', function($table)
        {
     
            $table->integer('order_id')->unsigned();
        });
    }
}
