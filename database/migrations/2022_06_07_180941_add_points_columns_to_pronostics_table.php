<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPointsColumnsToPronosticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pronostics', function (Blueprint $table) {
            $table->unsignedInteger('puntos')->nullable()->after('goals2');
            $table->boolean('aciertos')->nullable()->after('puntos');
            $table->boolean('penalties_definition')->after('aciertos')->default(false);
            $table->unsignedBigInteger('penalties_winner')->nullable()->after('penalties_definition');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pronostics', function (Blueprint $table) {
            $table->dropColumn('puntos');
            $table->dropColumn('aciertos');
            $table->dropColumn('penalties_definition');
            $table->dropColumn('penalties_winner');
        });
    }
}
