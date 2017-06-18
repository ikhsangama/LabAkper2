<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alat extends Model
{
    protected $table = 'alat';

    public function alatbahan()
    {
      return $this->belongsTo('App\Models\AlatBahan');
    }

    public function kategori()
    {
      return $this->belongsTo('App\Kategori');
    }
}
