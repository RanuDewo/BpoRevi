<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    public $timestamps = false;
    protected $table = 'trans';
    protected $fillable = [
        'no_trans', 'nama', 'cdate', 'nama_lengkap',  'type', 'nobpkb', 'merek', 'phone', 'userid'
    ];
}