<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Peristiwa extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'nama', 'deskripsi',
    ];

    public function datapelaporan()
    {
        return $this->hasMany('App\DataPelaporan');
    }
}
