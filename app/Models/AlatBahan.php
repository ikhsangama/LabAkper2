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
}
