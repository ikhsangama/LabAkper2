<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    //RELATION
    public function user()
    {
      return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
