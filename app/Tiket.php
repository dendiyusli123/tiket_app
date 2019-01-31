<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    // public function getJudul()
    // {
    //     return->$this->judul;
    // }
}
