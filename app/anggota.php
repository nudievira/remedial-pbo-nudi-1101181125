<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    protected $tabel = "anggotas";
     protected  $primarykey ="id";
      protected $fillable = [
          'id', 'nama', 'alamat', 'email','jabatan'];
}
