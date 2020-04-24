<?php namespace Codersocean\Honorpins\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCodersoceanHonorpinsPins extends Migration
{
    public function up()
    {
        Schema::table('codersocean_honorpins_pins', function($table)
        {
            $table->text('desc');
          
        });
    }
    
    public function down()
    {
        Schema::table('codersocean_honorpins_pins', function($table)
        {
            $table->dropColumn('desc');
          
        });
    }
}
