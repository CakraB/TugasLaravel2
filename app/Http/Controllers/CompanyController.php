<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    public function create(){
        return view('add-company');
    }
    public function store(Request $request){
        Company::create([
            'nama_perusahaan' => $request->company_name, //harus sesuai nama di table
            'alamat_perusahaan' => $request->company_address
        ]); 
        return back();
    }
}
