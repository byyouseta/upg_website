<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ManualPelaporan extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'user_id', 'pelaporan_id', 'status', 'file'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function pelaporan()
    {
        return $this->belongsTo('App\Pelaporan');
    }

    public function catatanpelaporanmanual()
    {
        return $this->hasMany('App\CatatanPelaporanManual');
    }
}
