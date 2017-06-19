<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SatuanAlat extends Model
{
    protected $table = 'satuan_alat';

    public function alatbahan()
    {
      return $this->belongsTo('App\Models\Alat');
    }

    // public function kategori()
    // {
    //   return $this->belongsTo('App\Kategori');
    // }
}
