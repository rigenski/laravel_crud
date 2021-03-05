<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['nisn', 'nama_lengkap', 'tempat', 'tanggal_lahir', 'gender', 'no_wa', 'email', 'alamat'];
}
