<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penerimaan extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'pelaporan_id', 'jenis',
    ];

    public function pelaporan()
    {
        return $this->belongsTo('App\Pelaporan');
    }

    public function datapelaporan()
    {
        return $this->hasMany('App\DataPelaporan');
    }
}
