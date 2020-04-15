<?php namespace Codersocean\Honorpins\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCodersoceanHonorpinsPaymentmethods3 extends Migration
{
    public function up()
    {
        Schema::table('codersocean_honorpins_paymentmethods', function($table)
        {
            $table->string('type', 191);
    
        });
    }
    
    public function down()
    {
        Schema::table('codersocean_honorpins_paymentmethods', function($table)
        {
            $table->dropColumn('type');
           
        });
    }
}
