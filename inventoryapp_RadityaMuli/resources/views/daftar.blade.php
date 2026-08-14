@extends('layouts.master')
@section('title')
    Halaman Pendaftaran
@endsection
@section('content')
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <form method="POST" action="/kirim">
        @csrf
        <label >Full name:</label> <br>
        <input type="text" name="fullname"> <br>
        <label >Gender:</label> <br>
        <input type="radio" name="gender" value="male">Male <br>
        <input type="radio" name="gender" value="female">Female <br>
        <input type="radio" name="gender" value="other">Other <br> <br>
        <label >Nationallity</label> <br>
        <select name="nationality">
            <option value="id">Indonesian</option>
            <option value="my">Malaysian</option>
            <option value="au">Australian</option>
        </select> <br> <br>
        <label> Language Spoken:</label> <br>
        <input type="checkbox" name = "language" value="bahasa_indonesia">Bahasa Indonesia <br>
        <input type="checkbox" name = "language" value="english">English <br>
        <input type="checkbox" name = "language" value="other">Other <br> <br>
        <label >Bio:</label> <br>
        <textarea name="bio" cols="40" rows="10"></textarea> <br>
        <input type="submit" value="Sign Up">

    </form>
@endsection