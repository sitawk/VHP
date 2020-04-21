<?php namespace Codersocean\Honorpins\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCodersoceanHonorpinsEmailsConnected extends Migration
{
    public function up()
    {
        Schema::create('codersocean_honorpins_emails_connected', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('email', 191);
            $table->integer('status');
            $table->integer('verification_code');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('codersocean_honorpins_emails_connected');
    }
}
