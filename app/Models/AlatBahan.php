<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlatBahan extends Model
{
  protected $table = 'alatbahan';
  public function fkategori()
  {
    return $this->belongsTo('App\Models\Kategori', 'kategori_id', 'id');
  }

  public function fjenis()
  {
    if ($this->jenis == 'alat'){
      return $this->hasOne('App\Models\Alat', 'alatbahan_id', 'id');
    }
    else if ($this->jenis == 'bahan'){
      return $this->hasOne('App\Models\Bahan', 'alatbahan_id', 'id');
    }
  }
}
