<?php namespace Codersocean\Honorpins\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCodersoceanHonorpinsSettings extends Migration
{
    public function up()
    {
        Schema::table('codersocean_honorpins_settings', function($table)
        {
            $table->string('sec_email', 191);
            $table->string('location', 191);
            $table->string('sec_phone', 191);
            $table->string('office_hour', 191);
         
        });
    }
    
    public function down()
    {
        Schema::table('codersocean_honorpins_settings', function($table)
        {
            $table->dropColumn('sec_email');
            $table->dropColumn('location');
            $table->dropColumn('sec_phone');
            $table->dropColumn('office_hour');
           
        });
    }
}
