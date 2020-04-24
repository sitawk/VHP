<?php namespace Codersocean\Honorpins\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCodersoceanHonorpinsPaymentsLogs2 extends Migration
{
    public function up()
    {
        Schema::table('codersocean_honorpins_payments_logs', function($table)
        {
            $table->string('cus_id', 191);
            $table->string('charge_id', 191);
            $table->string('refund_url', 191);
            
        });
    }
    
    public function down()
    {
        Schema::table('codersocean_honorpins_payments_logs', function($table)
        {
            $table->dropColumn('cus_id');
            $table->dropColumn('charge_id');
            $table->dropColumn('refund_url');
            
        });
    }
}
