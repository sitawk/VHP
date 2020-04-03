<?php namespace Codersocean\Honorpins\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCodersoceanHonorpinsHolders3 extends Migration
{
    public function up()
    {
        Schema::table('codersocean_honorpins_holders', function($table)
        {
            $table->string('streetaddress', 191)->nullable();
    
        });
    }
    
    public function down()
    {
        Schema::table('codersocean_honorpins_holders', function($table)
        {
            $table->dropColumn('streetaddress');
              });
    }
}
