<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('company_id')->unsigned(); //unsigned adalah sebuah constraint yang berufungsi supaya nilainya tidak boleh kurang dari 0
            $table->foreign('company_id')->references('id')->on('companies'); //membuat constraint FK dan memasukan ke kolom company_id berdasarkan referensi dari id yang ada di table companies 
            $table->string('nama_karyawan');
            $table->integer('umur_karyawan');
            $table->string('posisi_karyawan');
            $table->integer('gaji_karyawan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
