<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAksesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('user_akses');

        Schema::create('user_akses', function (Blueprint $table) {
            $table->increments('id_user_akses');


            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id_user')->on('users');

            $table->integer('id_hak_akses')->unsigned();
            $table->foreign('id_hak_akses')->references('id_hak_akses')->on('hak_akses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_akses');
    }
}
