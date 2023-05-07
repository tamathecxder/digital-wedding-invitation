<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class RsvpController extends Controller
{
    public function sendEmail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_pengirim' => 'required|string|min:3',
            'email_pengirim' => 'required|email',
            'pesan' => 'required|min:8',
        ], [
            'nama_pengirim.required' => 'Nama pengirim tidak boleh kosong!',
            'nama_pengirim.string' => 'Nama pengirim harus berupa huruf!',
            'nama_pengirim.min' => 'Nama pengirim minimal 3 karakter!',
            'email_pengirim.required' => 'Email pengirim tidak boleh kosong!',
            'email_pengirim.email' => 'Email pengirim tidak valid!',
            'pesan.required' => 'Pesan tidak boleh kosong!',
            'pesan.min' => 'Pesan minimal 8 karakter!',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        $namaPengirim = $request->input('nama_pengirim');
        $emailPengirim = $request->input('email_pengirim');
        $pesan = $request->input('pesan');

        $mail = new \App\Mail\RsvpMail(
            $namaPengirim,
            $emailPengirim,
            $pesan
        );

        Mail::to('dev.12tamago@gmail.com')->send($mail);

        return redirect()->back()->with('success', 'Terima kasih telah mengirimkan ucapan pernikahan!');
    }
}
