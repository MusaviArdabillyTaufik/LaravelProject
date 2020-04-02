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
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('rank')->nullable();
            $table->string('language')->nullable();
            $table->string('additional_info')->nullable();
            $table->string('avatar')->nullable();
            $table->integer('id_user')->nullable()->unsigned();
            $table->integer('id_steam')->nullable()->unsigned();
            $table->integer('id_csgo')->nullable()->unsigned();
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');

            $table->foreign('id_steam')->references('id')->on('steam_members')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');

            $table->foreign('id_csgo')->references('id')->on('csgos')
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
