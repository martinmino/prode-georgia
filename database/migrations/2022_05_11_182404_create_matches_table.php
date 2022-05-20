<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->datetime('date');
            $table->bigInteger('country1_id')->unsigned();
            $table->integer('goals1')->default(0);
            $table->bigInteger('country2_id')->unsigned();
            $table->integer('goals2')->default(0);
            $table->string('group', 1);
            $table->string('phase', 50);
            $table->string('result', 1)->nullable();
            $table->date('active_from')->nullable();
            $table->timestamps();

            $table->foreign('country1_id')->references('id')->on('countries');
            $table->foreign('country2_id')->references('id')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matches');
    }
}
