<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPenaltiesDefinitionToMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('matches', function (Blueprint $table) {
            $table->boolean('penalties_definition')->default(false);
            $table->integer('penalties1')->nullable();
            $table->integer('penalties2')->nullable();
            $table->unsignedBigInteger('penalties_winner')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('matches', function (Blueprint $table) {
            $table->dropColumn('penalties_definition');
            $table->dropColumn('penalties1');
            $table->dropColumn('penalties2');
            $table->dropColumn('penalties_winner');
        });
    }
}
