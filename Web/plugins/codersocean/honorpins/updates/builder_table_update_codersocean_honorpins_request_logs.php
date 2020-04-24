<?php namespace Codersocean\Honorpins\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCodersoceanHonorpinsRequestLogs extends Migration
{
    public function up()
    {
        Schema::table('codersocean_honorpins_request_logs', function($table)
        {
            $table->integer('user_id')->unsigned()->change();
            $table->integer('certificate_id')->unsigned()->change();
      
        });
    }
    
    public function down()
    {
        Schema::table('codersocean_honorpins_request_logs', function($table)
        {
            $table->integer('user_id')->unsigned(false)->change();
            $table->integer('certificate_id')->unsigned(false)->change();
           
        });
    }
}
