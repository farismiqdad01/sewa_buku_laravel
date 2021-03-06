<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telepon extends Model
{
    protected $table = 'telepon';
    protected $primarykey = 'id_peminjam';
    protected $fillable = ['id_peminjam', 'nomor_telepon'];

    public function peminjam(){
        return $this->belongsTo('App\peminjam', 'id');
    }
}
