<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CatatanPelaporanManual extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'manual_pelaporan_id', 'status', 'catatan'
    ];

    public function manualpelaporan()
    {
        return $this->belongsTo('App\ManualPelaporan');
    }
}
