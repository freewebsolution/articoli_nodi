<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterNodiToNodi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nodi', function (Blueprint $table) {
            $table->foreign('nodi_ID_padre')->references('nodi_ID')->on('nodi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nodi', function (Blueprint $table) {
            //
        });
    }
}
