<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPelaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pelaporans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('tempat_lahir', 100);
            $table->string('instansi', 100);
            $table->string('jabatan', 100);
            $table->text('alamat_kantor');
            $table->string('telp_kantor', 20);
            $table->string('ktp', 20);
            $table->date('tgl_lahir');
            $table->string('unit', 100);
            $table->integer('pelaporan_id');
            $table->integer('penerimaan_id');
            $table->integer('peristiwa_id');
            $table->string('tempat_terima', 100);
            $table->date('tgl_terima');
            $table->text('uraian_peristiwa');
            $table->integer('nilai');
            $table->string('lainnya');
            $table->string('nama_pemberi', 100);
            $table->text('alamat_pemberi');
            $table->string('nohp_pemberi', 20);
            $table->string('pekerjaan', 100);
            $table->string('email_pemberi', 100);
            $table->string('hubungan', 100);
            $table->string('alasan', 100);
            $table->string('dokumen', 20);
            $table->string('file_bukti', 50);
            $table->string('kronologi');
            $table->string('status');
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
        Schema::dropIfExists('data_pelaporans');
    }
}
