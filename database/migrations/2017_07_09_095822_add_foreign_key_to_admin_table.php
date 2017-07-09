<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('admin', function (Blueprint $table) {
           $table->integer('organization_id')->unsigned();
           $table->foreign('organization_id')
             ->references('id')->on('organizations')
             ->onDelete('cascade');
           $table->integer('user_id')->unsigned();
           $table->foreign('user_id')
             ->references('id')->on('users')
             ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
