<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
   public function daftar()
   {
       return view('daftar');
   }

   public function submit(Request $request)
   {
       $fullname = $request->input('fullname');
       $bio = $request->input('bio');
       // Simpan data ke database atau lakukan tindakan lain sesuai kebutuhan
       // Misalnya, Anda dapat membuat pengguna baru di sini

       return view('home', ['fullname' => $fullname, 'bio' => $bio]);
}
}