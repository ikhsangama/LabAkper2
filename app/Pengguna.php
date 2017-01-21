<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'pengguna';

    protected $guarded = ['created_at', 'updated_at'];

    protected $fillable = ['nama', 'password', 'telp'];

}
