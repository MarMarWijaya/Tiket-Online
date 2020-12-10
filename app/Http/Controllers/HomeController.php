<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        ///$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('email');
    }

    // Fungsi mengirim email
    public function sendEmail(Request $request){
        DB::table('pemesanan')
        ->insert([
            'namaPemesan' => $request->namaPemesan,
            'emailPemesan' => $request->emailPemesan,
            'hpPemesan' => $request->hpPemesan,
            'nikPemesan' => $request->nikPemesan,
            'namaPenumpang' => $request->namaPenumpang,
            'nikPenumpang' => $request->nikPenumpang,
            'hpPenumpang' => $request->hpPenumpang,
            'emailPenumpang' => $request->emailPenumpang,
            'idKereta' => $request->idKereta,
            'idStok' => $request->idStok,
            'idKelas' => $request->idKelas,
            'berangkat' => $request->berangkat,
            'tiba' => $request->tiba,
            'gerbong' => $request->gerbong,
            'nomorKursi' => $request->kursi,
            'harga' => $request->harga
        ]);

        $namaKereta = DB::table('kereta')
        ->select('nama_kereta')    
        ->where('idKereta', $request->idKereta)
        ->get();

        foreach ($namaKereta as $k) {
            $nama = $k->nama_kereta;
        }

        $email = $request->emailPemesan;
        $data = array(
                'name' => $request->name,
                'namaPemesan' => $request->namaPemesan,
                'namaPenumpang' => $request->namaPenumpang,
                'nikPenumpang' => $request->nikPenumpang,
                'namaKereta' => $nama,
                'berangkat' => $request->berangkat,
                'tiba' => $request->tiba,
                'kelas' => $request->kelas,
                'gerbong' => $request->gerbong,
                'nomorKursi' => $request->kursi,
                'harga' => $request->harga
            );

        // Kirim Email
        Mail::send('email_template', $data, function($mail) use($email) {
            $mail->to($email, 'no-reply')
                    ->subject("Tiket Jangkrik Balap");
            $mail->from('mariowijaya31@gmail.com', 'Jangkrik Balap');
        });

        // Cek kegagalan
        if (Mail::failures()) {
            return "Gagal mengirim Email";
        }
        return view('home', ['msg' => "Terimakasih sudah menggunakan layanan kami, cek email Anda untuk melihat tiket Anda"]);
    }
}
