<?php namespace Codersocean\Honorpins\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCodersoceanHonorpinsHolderPins6 extends Migration
{
    public function up()
    {
        Schema::table('codersocean_honorpins_holder_pins', function($table)
        {
            $table->string('phone', 191);
          
        });
    }
    
    public function down()
    {
        Schema::table('codersocean_honorpins_holder_pins', function($table)
        {
            $table->dropColumn('phone');
            
        });
    }
}
