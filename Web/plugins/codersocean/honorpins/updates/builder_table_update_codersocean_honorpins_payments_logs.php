<?php namespace Codersocean\Honorpins\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCodersoceanHonorpinsPaymentsLogs extends Migration
{
    public function up()
    {
        Schema::table('codersocean_honorpins_payments_logs', function($table)
        {
            $table->string('receipt_url', 200);
    
        });
    }
    
    public function down()
    {
        Schema::table('codersocean_honorpins_payments_logs', function($table)
        {
            $table->dropColumn('receipt_url');
            
        });
    }
}
