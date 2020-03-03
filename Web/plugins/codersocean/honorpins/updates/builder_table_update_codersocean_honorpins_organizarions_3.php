<?php namespace Codersocean\Honorpins\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCodersoceanHonorpinsOrganizarions3 extends Migration
{
    public function up()
    {
        Schema::table('codersocean_honorpins_organizarions', function($table)
        {
            $table->integer('country_id')->unsigned();
            $table->integer('state_id')->unsigned();
    
        });
    }
    
    public function down()
    {
        Schema::table('codersocean_honorpins_organizarions', function($table)
        {
            $table->dropColumn('country_id');
            $table->dropColumn('state_id');
         
        });
    }
}
