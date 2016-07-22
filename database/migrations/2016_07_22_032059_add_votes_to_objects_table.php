<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
  
class AddVotesToObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('objects', function (Blueprint $table) {
            $table->increments('oid');
            $table->string('objcolor');
            $table->integer('width');
            $table->integer('height');
            $table->integer('depth');
            $table->string('shape');
            $table->string('shapeicon')->default('');
            $table->integer('uid');
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
        Schema::table('objects', function (Blueprint $table) {
            //
        });
    }
}
