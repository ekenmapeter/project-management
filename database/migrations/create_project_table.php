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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('projecttitle');
            $table->string('awardeddate');
            $table->string('statelocated');
            $table->string('contractor');
            $table->string('supervisor');
            $table->string('division');
            $table->string('coordinator');
            $table->string('state');
            $table->string('objectives');
            $table->string('percentcompleted');
            $table->string('retention');
            $table->string('completiondate');
            $table->string('completedate');            
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
        Schema::dropIfExists('projects');
    }
};