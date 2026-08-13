@extends('layouts.master')
@section('title', 'Welcome Page')
@endsection
@section('content')
    <!-- Menampilkan variabel yang dikirim dari FormController -->
    <h1>Selamat Datang, {{ $firstName }} {{ $lastName }}!</h1>
    <h3>Terima kasih telah bergabung.</h3>
@endsection