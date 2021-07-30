<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pelaporan extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'jenis', 'deskripsi',
    ];

    public function penerimaan()
    {
        return $this->hasMany('App\Penerimaan');
    }

    public function datapelaporan()
    {
        return $this->hasMany('App\DataPelaporan');
    }
}
