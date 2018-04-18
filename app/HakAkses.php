<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HakAkses extends Model
{
    protected $table = 'hak_akses';

    protected $primaryKey = 'id_hak_akses';

    public $timestamps = false;

    protected $fillable = [
    	'id_hak_akses', 'hak_akses', 'deskripsi',
    ];

    public function userAkses() {
        return $this->hasOne('App\UserAkses', 'id_hak_akses');
    }
}
