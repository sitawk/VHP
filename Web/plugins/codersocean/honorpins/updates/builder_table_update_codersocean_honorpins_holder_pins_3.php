<?php namespace Codersocean\Honorpins\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCodersoceanHonorpinsHolderPins3 extends Migration
{
    public function up()
    {
        Schema::table('codersocean_honorpins_holder_pins', function($table)
        {
            $table->string('email', 191);
            $table->string('full_name', 191);
            $table->dropColumn('holder_id');
        });
    }
    
    public function down()
    {
        Schema::table('codersocean_honorpins_holder_pins', function($table)
        {
            $table->dropColumn('email');
            $table->dropColumn('full_name');
            $table->integer('holder_id')->unsigned();
        });
    }
}
