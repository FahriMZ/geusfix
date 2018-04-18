<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAkses extends Model
{
    protected $table = 'user_akses';

    protected $primaryKey = 'id_user_akses';

    public $timestamps = false;

    protected $fillable = [
    	'id_user_akses', 'id_user', 'id_hak_akses',
    ];

    public function user() {
    	return $this->belongsTo('App\User', 'id_user');
    }

    public function user() {
    	return $this->belongsTo('App\HakAkses', 'id_hak_akses');
    }
}
