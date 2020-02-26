<?php namespace Codersocean\Honorpins\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCodersoceanHonorpinsOrganizarions extends Migration
{
    public function up()
    {
        Schema::create('codersocean_honorpins_organizarions', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('user_id')->nullable()->unsigned();
            $table->string('org_name', 199)->nullable();
            $table->string('website', 191)->nullable();
            $table->string('address', 191)->nullable();
            $table->string('city', 191)->nullable();
            $table->string('state', 191)->nullable();
            $table->string('zip', 191)->nullable();
            $table->string('country', 191)->nullable();
            $table->string('phone', 191)->nullable();
            $table->string('org_email', 191)->nullable();
            $table->string('logo', 191)->nullable();
            $table->integer('status')->nullable()->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('codersocean_honorpins_organizarions');
    }
}
