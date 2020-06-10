<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Company;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $employees = Employee::all(); 
        return view('welcome', compact('employees'));
    }
    public function create(){
        $companies = Company::all();
        return view('add-employee', compact('companies'));
    }
    public function store(Request $request){
        Employee::create([
            'company_id' => $request->staff_company,
            'nama_karyawan' => $request->staff_name,
            'umur_karyawan' => $request->staff_age,
            'posisi_karyawan' => $request->staff_position,
            'gaji_karyawan' => $request->staff_salary
        ]); 
        return back();
    }
    public function edit($id) {
        $employees = Employee::findOrFail($id); //sebuah method dari laravel buat ambil single data
        $companies = Company::all();
        return view('edit-employee', compact('employees','companies')); //cari data base on id lalu di lempar ke file edit
    }

    public function update(Request $request, $id) {
        Employee::findOrFail($id)->update([
            'company_id' => $request->staff_company,
            'nama_karyawan' => $request->staff_name,
            'umur_karyawan' => $request->staff_age,
            'posisi_karyawan' => $request->staff_position, 
            'gaji_karyawan' => $request->staff_salary
        ]);
        return redirect('/');
    }

    public function delete($id){
        Employee::destroy($id);
        return back();
    }
}
