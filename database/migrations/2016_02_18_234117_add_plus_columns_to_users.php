<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPlusColumnsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function($table){
           $table->string('lastname');
           $table->string('documento');
           $table->integer('rol');           
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
        Schema::table('users', function($table){
           $table->dropColumn('lastname');
           $table->dropColumn('documento');
           $table->dropColumn('rol');           
        });
    }
}
