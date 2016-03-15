<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('deposits', function(Blueprint $table){
            $table->increments('id');
            $table->integer('userid')->unique();
            $table->date('deposit_date');
            $table->string('banco');
            $table->string('Num_transaccion');
            $table->string('sucursal',255);
            $table->integer('valor');
            $table->string('observacion');
            $table->string('attachment');
            $table->rememberToken();
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
        //
    }
}
