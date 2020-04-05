<?php namespace Codersocean\Honorpins\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCodersoceanHonorpinsCart2 extends Migration
{
    public function up()
    {
        Schema::table('codersocean_honorpins_cart', function($table)
        {
            $table->integer('certificate_id')->unsigned();
            $table->integer('pin_id')->unsigned();
            $table->integer('org_id')->unsigned();
    
        });
    }
    
    public function down()
    {
        Schema::table('codersocean_honorpins_cart', function($table)
        {
            $table->dropColumn('certificate_id');
            $table->dropColumn('pin_id');
            $table->dropColumn('org_id');
           
        });
    }
}
