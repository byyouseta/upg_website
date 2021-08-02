<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class CatatanPelaporan extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'data_pelaporan_id', 'status', 'catatan'
    ];

    public function datapelaporan()
    {
        return $this->belongsTo('App\DataPelaporan');
    }
}
