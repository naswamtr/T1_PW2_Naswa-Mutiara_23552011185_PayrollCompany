<!DOCTYPE html>
<html>
<head>

<title>Landing Page Payroll</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
rel="stylesheet">

<style>

html {
scroll-behavior: smooth;
}

</style>

</head>

<body style="padding-top: 80px;">

{{-- Navbar --}}
@include('components.navbar')

<div class="container mt-4">

@yield('content')

</div>

{{-- Footer --}}
@include('components.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>