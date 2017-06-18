<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alat extends Model
{
    protected $table = 'alat';
    public function kategori()
    {
      return $this->belongsTo('App\Kategori');
    }
}
