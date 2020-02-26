<?php namespace Codersocean\Honorpins\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCodersoceanHonorpinsCertificates extends Migration
{
    public function up()
    {
        Schema::create('codersocean_honorpins_certificates', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('org_id')->unsigned();
            $table->string('title', 191)->nullable();
            $table->text('desc');
            $table->string('url', 191);
            $table->integer('category_id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('codersocean_honorpins_certificates');
    }
}
