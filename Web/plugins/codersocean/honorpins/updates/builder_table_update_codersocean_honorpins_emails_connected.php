<?php namespace Codersocean\Honorpins\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCodersoceanHonorpinsEmailsConnected extends Migration
{
    public function up()
    {
        Schema::table('codersocean_honorpins_emails_connected', function($table)
        {
            $table->integer('is_primary');
           
        });
    }
    
    public function down()
    {
        Schema::table('codersocean_honorpins_emails_connected', function($table)
        {
            $table->dropColumn('is_primary');
            
        });
    }
}
