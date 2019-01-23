<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTablePasien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pasien', function($table) {
            $table->string('petugas',60);
        });

        Schema::table('penanggung_jawab', function($table) {
            $table->string('no_rm',10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pasien', function($table) {
            $table->dropColumn('petugas');
        });

        Schema::table('penanggung_jawab', function($table) {
            $table->dropColumn('no_rm');
        });        
    }
}
