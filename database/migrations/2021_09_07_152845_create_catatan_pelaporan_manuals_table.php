<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatatanPelaporanManualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catatan_pelaporan_manuals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('manual_pelaporan_id');
            $table->tinyInteger('status');
            $table->text('catatan');
            $table->softDeletes();
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
        Schema::dropIfExists('catatan_pelaporan_manuals');
    }
}
