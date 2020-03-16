<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCsgosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('csgos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('main_role1')->nullable();
            $table->string('main_role2')->nullable();
            $table->string('main_role3')->nullable();
            $table->string('tactical_role1')->nullable();
            $table->string('tactical_role2')->nullable();
            $table->string('tactical_role3')->nullable();
            $table->string('rank')->nullable();
            $table->string('friend_code')->nullable();
            $table->string('server_region')->nullable();
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
        Schema::dropIfExists('csgos');
    }
}
