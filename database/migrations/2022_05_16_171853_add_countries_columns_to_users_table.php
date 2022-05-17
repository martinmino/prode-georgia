<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCountriesColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('country1_id')->nullable();
            $table->unsignedBigInteger('country2_id')->nullable();
            $table->unsignedBigInteger('country3_id')->nullable();
            $table->unsignedBigInteger('country4_id')->nullable();
            $table->boolean('admin')->default(false);

            $table->foreign('country1_id')->references('id')->on('countries');
            $table->foreign('country2_id')->references('id')->on('countries');
            $table->foreign('country3_id')->references('id')->on('countries');
            $table->foreign('country4_id')->references('id')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['country1_id']);
            $table->dropForeign(['country2_id']);
            $table->dropForeign(['country3_id']);
            $table->dropForeign(['country4_id']);

            $table->dropColumn('country1_id');
            $table->dropColumn('country2_id');
            $table->dropColumn('country3_id');
            $table->dropColumn('country4_id');
        });
    }
}
