<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peminjam extends Model
{
    protected $table = 'peminjam';

    public function telepon(){
        return $this->hasOne('App\Telepon', 'id_peminjam');
    }
}
