<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

return view('home', [

'title' => 'Payroll System',

'nama_sistem' =>
'Sistem Informasi Payroll Karyawan',

'deskripsi' =>
'Sistem payroll membantu perusahaan dalam mengelola gaji, tunjangan, dan laporan penggajian secara otomatis.'

]);

});

