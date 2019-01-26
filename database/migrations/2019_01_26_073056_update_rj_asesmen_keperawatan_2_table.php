<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateRjAsesmenKeperawatan2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rj_asesmen_keperawatan', function($table) {
            $table->string('umur_edm',1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rj_asesmen_keperawatan', function($table) {
            $table->dropColumn('umur_edm');
        });
    }
}
