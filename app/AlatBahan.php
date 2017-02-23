<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlatBahan extends Model
{
    protected $table = 'alatbahan';
    public function kategori()
    {
      return $this->belongsTo('App\Kategori');
    }
}
