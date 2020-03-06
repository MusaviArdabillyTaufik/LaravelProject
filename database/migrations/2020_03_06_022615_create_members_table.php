<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('code')->nullable();
            $table->string('rank')->nullable();
            $table->string('avatar')->nullable();
            $table->integer('id_user')->unsigned();
            $table->integer('id_steam')->unsigned();
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');

            $table->foreign('id_steam')->references('id')->on('steam_members')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
