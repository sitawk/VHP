<?php namespace Codersocean\Honorpins\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCodersoceanHonorpinsRequestLogs2 extends Migration
{
    public function up()
    {
        Schema::table('codersocean_honorpins_request_logs', function($table)
        {
            $table->integer('holderpin_id')->unsigned();
         
        });
    }
    
    public function down()
    {
        Schema::table('codersocean_honorpins_request_logs', function($table)
        {
            $table->dropColumn('holderpin_id');
            
        });
    }
}
