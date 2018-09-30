<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiSuicideFisikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ri_suicide_fisik', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id')->on('identifikasi');
            $table->string('s1',1)->nullable();
            $table->string('s2',1)->nullable();
            $table->string('s3',1)->nullable();
            $table->string('s4',1)->nullable();
            $table->string('s5',1)->nullable();
            $table->string('s6',1)->nullable();
            $table->string('s7',1)->nullable();
            $table->string('s8',1)->nullable();
            $table->string('s9',1)->nullable();
            $table->string('s10',1)->nullable();
            $table->string('s11',1)->nullable();
            $table->string('s12',1)->nullable();
            $table->string('s13',1)->nullable();
            $table->string('s14',1)->nullable();
            $table->string('s15',1)->nullable();
            $table->string('s16',1)->nullable();
            $table->string('s17',1)->nullable();
            $table->string('s18',1)->nullable();
            $table->string('s19',1)->nullable();
            $table->string('s20',1)->nullable();
            $table->string('s21',1)->nullable();
            $table->string('s22',1)->nullable();
            $table->string('s23',1)->nullable();
            $table->string('s24',1)->nullable();
            $table->string('s25',1)->nullable();
            $table->string('s26',1)->nullable();
            $table->string('s27',1)->nullable();
            $table->string('s28',1)->nullable();
            $table->string('s29',1)->nullable();
            $table->string('s30',1)->nullable();
            $table->string('s31',1)->nullable();
            $table->string('s32',1)->nullable();
            $table->string('p1')->nullable();
            $table->string('p2')->nullable();
            $table->string('p3')->nullable();
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
        Schema::dropIfExists('ri_suicide_fisik');
    }
}
