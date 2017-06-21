<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    public function alatbahan()
    {
      return $this->hasMany('App\AlatBahan', 'id_kategori', 'id');
    }
}