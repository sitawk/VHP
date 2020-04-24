<?php namespace Codersocean\Honorpins\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCodersoceanHonorpinsHolderPins5 extends Migration
{
    public function up()
    {
        Schema::table('codersocean_honorpins_holder_pins', function($table)
        {
            $table->integer('availbility')->default(0);
            $table->date('start_date')->nullable(false)->unsigned(false)->default(null)->change();
            $table->date('end_date')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('codersocean_honorpins_holder_pins', function($table)
        {
            $table->dropColumn('availbility');
            $table->string('start_date', 191)->nullable(false)->unsigned(false)->default(null)->change();
            $table->string('end_date', 191)->nullable(false)->unsigned(false)->default(null)->change();
              });
    }
}
