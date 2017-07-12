<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bahan extends Model
{
    protected $table = 'bahan';

    public function falatbahan()
    {
      return $this->belongsTo('App\Models\AlatBahan', 'alatbahan_id', 'id');
    }
    
    public function fsatuanbahan()
    {
      return $this->belongsTo('App\Models\SatuanBahan', 'satuanbahan_id', 'id');
    }
}
