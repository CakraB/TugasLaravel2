<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['nama_perusahaan','alamat_perusahaan']; //harus sesuai nama di table
}
