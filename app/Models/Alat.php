<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alat extends Model
{
    protected $table = 'alat';

    public function falatbahan()
    {
      return $this->belongsTo('App\Models\AlatBahan', 'alatbahan_id', 'id');
    }

    public function fkategori()
    {
      return $this->belongsTo('App\Kategori');
    }

    public function fsatuanalat()
    {
      return $this->belongsTo('App\Models\SatuanAlat', 'satuanalat_id', 'id');
    }
}
