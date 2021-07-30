<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataPelaporan extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'user_id', 'tempat_lahir', 'instansi', 'jabatan', 'alamat_kantor', 'telp_kantor', 'ktp', 'tgl_lahir', 'unit', 'penerimaan_id', 'pelaporan_id',
        'peristiwa_id', 'tempat_terima', 'tgl_terima', 'uraian_peristiwa', 'nilai', 'lainnya', 'nama_pemberi', 'alamat_pemberi', 'nohp_pemberi',
        'pekerjaan', 'email_pemberi', 'hubungan', 'alasan', 'dokumen', 'file_bukti', 'kronologi', 'status', 'catatan'

    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function pelaporan()
    {
        return $this->belongsTo('App\Pelaporan');
    }
    public function penerimaan()
    {
        return $this->belongsTo('App\Penerimaan');
    }
    public function peristiwa()
    {
        return $this->belongsTo('App\Peristiwa');
    }
}
