<?php namespace Codersocean\Honorpins\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCodersoceanHonorpinsHolders4 extends Migration
{
    public function up()
    {
        Schema::table('codersocean_honorpins_holders', function($table)
        {
            $table->integer('pin_status')->default(0);
     
        });
    }
    
    public function down()
    {
        Schema::table('codersocean_honorpins_holders', function($table)
        {
            $table->dropColumn('pin_status');
           
        });
    }
}
