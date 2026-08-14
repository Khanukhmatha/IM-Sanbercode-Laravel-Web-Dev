@extends('layouts.master')
@section('title')
    Halaman Dashboard
@endsection
@section('content')
    <h1>Selamat Datang {{$fullname}}</h1>
    <h2>Bio:</h2>
    <p>{{$bio}}</p>
@endsection