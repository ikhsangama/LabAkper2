<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SatuanBahan extends Model
{
    protected $table = 'satuan_bahan';

    public function alatbahan()
    {
      return $this->belongsTo('App\Models\Alat');
    }

    public function fbahan()
    {
      return $this->hasMany('App\Models\Bahan');
    }
}
