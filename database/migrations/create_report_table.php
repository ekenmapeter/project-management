<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('visitdate');
            $table->string('selectproject');
            $table->string('projectlocation');
            $table->string('percentcompletion');
            $table->string('challenges');
            $table->string('recommendations');
            $table->string('docfile');
            $table->string('supervisordivistion');
            $table->string('socialimpact');
            $table->string('zonalcomment');            
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
        Schema::dropIfExists('reports');
    }
};