<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['nama_karyawan','umur_karyawan','posisi_karyawan','gaji_karyawan','company_id'];

    public function company(){
        return $this->belongsTo('App\Company');//belongsTo artinya dimiliki (Employee dimiliki Company)
    }
}
