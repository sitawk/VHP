<?php namespace Codersocean\Honorpins\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCodersoceanHonorpinsHolderPins2 extends Migration
{
    public function up()
    {
        Schema::table('codersocean_honorpins_holder_pins', function($table)
        {
            $table->string('public_access_code', 191);
            $table->renameColumn('access_code', 'private_access_code');
        });
    }
    
    public function down()
    {
        Schema::table('codersocean_honorpins_holder_pins', function($table)
        {
            $table->dropColumn('public_access_code');
            $table->renameColumn('private_access_code', 'access_code');
        });
    }
}
