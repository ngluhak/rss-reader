<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Recommends extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recommends', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('article_id')->constrained('articles')->onDelete('cascade');

            //$table->primary(['user_id','article_id']);
            //iz nekog razloga mi javlja grešku da ne mogu ubaciti više primary key-eva
       

        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recommends');
        
    }
}
