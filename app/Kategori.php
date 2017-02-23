<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    public function alatbahan()
    {
      return $this->hasMany('App\AlatBahan', 'id_kategori', 'id'); //alatbahan dimiliki oleh kategori, dengan kunci tamu 'id_kategori' dan primary key local 'id'
    }
}
