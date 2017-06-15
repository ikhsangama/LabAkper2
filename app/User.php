<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    // protected $table = 'pengguna';
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'level', 'email', 'password', 'token', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin()
    {
      if ($this->level == 1) {
        return true; //jika admin
          return false;
      }
    }


    public function isDosen()
    {
      if ($this->level == 2) {
        return true; //jika dosen
          return false;
      }
    }

    public function isMahasiswa()
    {
      if ($this->level == 3 || 4) {
        return true; //jika d3
          return false;
      }
    }

}
