<?php namespace Codersocean\Honorpins\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCodersoceanHonorpinsOrganizarions extends Migration
{
    public function up()
    {
        Schema::table('codersocean_honorpins_organizarions', function($table)
        {
            $table->string('verification_code', 191);
         
           
        });
    }
    
    public function down()
    {
        Schema::table('codersocean_honorpins_organizarions', function($table)
        {
            $table->dropColumn('verification_code');
        });
    }
}
