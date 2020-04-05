<?php namespace Codersocean\Honorpins\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCodersoceanHonorpinsCart3 extends Migration
{
    public function up()
    {
        Schema::table('codersocean_honorpins_cart', function($table)
        {
            $table->string('name', 191);
       
        });
    }
    
    public function down()
    {
        Schema::table('codersocean_honorpins_cart', function($table)
        {
            $table->dropColumn('name');
           
        });
    }
}
