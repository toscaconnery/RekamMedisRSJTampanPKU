<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListDocumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_document', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id')->on('identifikasi');
            // $table->boolean('rj_asesmen_awal_perawat')->default(False);
            // $table->boolean('rj_asesmen_awal_dokter')->default(False);
            // $table->boolean('')->default(False);
            // $table->boolean('')->default(False);
            // $table->boolean('')->default(False);
            // $table->boolean('')->default(False);
            // $table->boolean('')->default(False);
            // $table->boolean('')->default(False);
            // $table->boolean('')->default(False);
            // $table->boolean('')->default(False);
            // $table->boolean('')->default(False);
            // $table->boolean('')->default(False);
            // $table->boolean('')->default(False);
            // $table->boolean('')->default(False);
            // $table->boolean('')->default(False);
            // $table->boolean('')->default(False);
            // $table->boolean('')->default(False);
            // $table->boolean('')->default(False);
            // $table->boolean('')->default(False);
            // $table->boolean('')->default(False);
            // $table->boolean('')->default(False);
            // $table->boolean('')->default(False);
            // $table->boolean('')->default(False);
            // $table->boolean('')->default(False);
            // $table->boolean('')->default(False);
            // $table->boolean('')->default(False);
            // $table->boolean('')->default(False);
            // $table->boolean('')->default(False);
            // $table->boolean('')->default(False);
            // $table->boolean('')->default(False);
            // $table->boolean('')->default(False);
            // $table->boolean('')->default(False);
            // $table->boolean('')->default(False);
            // $table->boolean('')->default(False);
            
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
        Schema::dropIfExists('list_document');
    }
}
