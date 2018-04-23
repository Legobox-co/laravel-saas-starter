<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servers'. function(Blueprint $table){
			$table->increments('id');
			$table->string('ipaddress');
			$table->longtext('ssh_private_key');
			$table->longtext('ssh_public_key');
			$table->unsignedInteger('project_id');
			$table->boolean('connection');
			$table->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servers');
    }
}
