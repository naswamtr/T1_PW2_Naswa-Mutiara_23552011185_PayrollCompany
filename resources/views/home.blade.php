@extends('layouts.app')

@section('content')

{{-- ================= HOME ================= --}}
<div id="home" class="text-center">

<h1 class="mb-3">
Selamat Datang di {{ $nama_sistem }}
</h1>

<p>
{{ $deskripsi }}
</p>

</div> 

{{-- ================= CAROUSEL ================= --}}
<div class="d-flex justify-content-center">

<div id="carouselExample"
class="carousel slide mt-4"
data-bs-ride="carousel"
style="width: 70%;">

<div class="carousel-inner rounded shadow">

{{-- Slide 1 --}}
<div class="carousel-item active">

<img src="{{ asset('images/payroll-1.jpeg') }}"
class="d-block w-100"
alt="Payroll Management"
style="height: 300px; object-fit: cover;">

</div>

{{-- Slide 2 --}}
<div class="carousel-item">

<img src="{{ asset('images/payroll-2.jpeg') }}"
class="d-block w-100"
alt="Salary Calculation"
style="height: 300px; object-fit: cover;">

</div>

{{-- Slide 3 --}}
<div class="carousel-item">

<img src="{{ asset('images/payroll-3.jpeg') }}"
class="d-block w-100"
alt="Payroll Report"
style="height: 300px; object-fit: cover;">

</div>

</div>

{{-- Tombol Prev --}}
<button class="carousel-control-prev"
type="button"
data-bs-target="#carouselExample"
data-bs-slide="prev">

<span class="carousel-control-prev-icon"></span>

</button>

{{-- Tombol Next --}}
<button class="carousel-control-next"
type="button"
data-bs-target="#carouselExample"
data-bs-slide="next">

<span class="carousel-control-next-icon"></span>

</button>

</div>

</div>

{{-- ================= SECTION FITUR ================= --}}
<div id="fitur" class="row mt-5">

<h2 class="text-center mb-4">

Fitur Utama Sistem Payroll

</h2>

<div class="row">

{{-- Fitur 1 --}}
<div class="col-md-4 mb-3">

<div class="card shadow-sm h-100">

<div class="card-body text-center">

<h1>💰</h1>

<h5 class="mt-2">

Penggajian Otomatis

</h5>

<p class="text-muted">

Menghitung gaji karyawan secara otomatis
berdasarkan absensi dan tunjangan.

</p>

</div>

</div>

</div>

{{-- Fitur 2 --}}
<div class="col-md-4 mb-3">

<div class="card shadow-sm h-100">

<div class="card-body text-center">

<h1>📊</h1>

<h5 class="mt-2">

Laporan Gaji

</h5>

<p class="text-muted">

Menampilkan laporan payroll bulanan
dengan data yang akurat dan cepat.

</p>

</div>

</div>

</div>

{{-- Fitur 3 --}}
<div class="col-md-4 mb-3">

<div class="card shadow-sm h-100">

<div class="card-body text-center">

<h1>👤</h1>

<h5 class="mt-2">

Manajemen Karyawan

</h5>

<p class="text-muted">

Mengelola data karyawan,
jabatan, dan status kerja.

</p>

</div>

</div>

</div>

</div>

</div>

{{-- ================= SECTION ABOUT ================= --}}
<div class="mt-5">

<h2 class="text-center mb-3">

Tentang Sistem Payroll

</h2>

<p class="text-center text-muted">

Sistem Informasi Payroll adalah solusi digital
yang membantu perusahaan dalam mengelola
penggajian karyawan secara otomatis,
mengurangi kesalahan perhitungan,
serta meningkatkan efisiensi kerja HR.

</p>

<div id="kontak" class="mt-5 text-center">

<h3>Kontak Kami</h3>

<p>Email: payroll@company.com</p>
<p>Telepon: 0812-3456-7890</p>
<p>Alamat: Jakarta, Indonesia</p>

</div>

</div>

@endsection