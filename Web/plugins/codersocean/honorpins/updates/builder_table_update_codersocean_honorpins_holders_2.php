<?php namespace Codersocean\Honorpins\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCodersoceanHonorpinsHolders2 extends Migration
{
    public function up()
    {
        Schema::table('codersocean_honorpins_holders', function($table)
        {
            $table->string('reg_number', 191);
    
        });
    }
    
    public function down()
    {
        Schema::table('codersocean_honorpins_holders', function($table)
        {
            $table->dropColumn('reg_number');
           
        });
    }
}
