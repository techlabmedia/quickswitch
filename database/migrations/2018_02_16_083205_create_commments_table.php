<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('text');
            $table->integer('post_id')->unsigned();
            $table->timestamps();
        });

            schema::table('comments', function($table){
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::dropForeign(['post_id']);
        Schema::dropIfExists('commments');
        
    }
}
