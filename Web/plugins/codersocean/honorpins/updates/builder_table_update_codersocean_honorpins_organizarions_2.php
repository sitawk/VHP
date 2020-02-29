<?php namespace Codersocean\Honorpins\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCodersoceanHonorpinsOrganizarions2 extends Migration
{
    public function up()
    {
        Schema::table('codersocean_honorpins_organizarions', function($table)
        {
            $table->string('mobile', 191)->nullable();
            $table->integer('user_id')->nullable(false)->default(null)->change();
         
            $table->integer('status')->nullable(false)->default(null)->change();
         
        });
    }
    
    public function down()
    {
        Schema::table('codersocean_honorpins_organizarions', function($table)
        {
            $table->dropColumn('mobile');
            $table->integer('user_id')->nullable()->default(NULL)->change();
        
            $table->integer('status')->nullable()->default(NULL)->change();
        
        });
    }
}
