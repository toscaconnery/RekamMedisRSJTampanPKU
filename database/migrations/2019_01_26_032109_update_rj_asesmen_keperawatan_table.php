<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateRjAsesmenKeperawatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rj_asesmen_keperawatan', function($table) {
            $table->integer('skor_resiko_jatuh')->default(0);
            $table->string('gangguan_pola_tidur',1)->nullable();
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
            $table->dropColumn('skor_resiko_jatuh');
            $table->dropColumn('gangguan_pola_tidur');
        });
    }
}
