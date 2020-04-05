<?php namespace Codersocean\Honorpins\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCodersoceanHonorpinsCertificates extends Migration
{
    public function up()
    {
        Schema::table('codersocean_honorpins_certificates', function($table)
        {
            $table->integer('pin_id')->unsigned();
    
        });
    }
    
    public function down()
    {
        Schema::table('codersocean_honorpins_certificates', function($table)
        {
            $table->dropColumn('pin_id');
              });
    }
}
