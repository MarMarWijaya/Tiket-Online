<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListKeretaController extends Controller
{
    public function index(){
        $stasiun = DB::table('stasiun')->get();
        return view('pesan', ['stasiun' => $stasiun]);
    }

    public function tampilkan_kereta(Request $req){
        $stasiun = DB::table('stasiun')->get();
        $kereta = DB::table('kereta')
        ->join('stok', 'kereta.id', '=', 'stok.id')
        ->join('gerbong', 'kereta.id', '=', 'gerbong.id')
        ->select('nama_kereta', 'awal', 'tujuan', 'jam_berangkat', 'jam_sampai', 'sisa', 'tgl', 'tgl_tujuan', 'Kelas', 'kereta.id', 'gerbong.idKelas', 'stok.idStok')
        ->where('tgl', $req->date)
        ->where('awal', $req->asal)
        ->where('tujuan', $req->tujuan)
        ->get()
        ;
        return view('pesan', ['kereta' => $kereta], ['stasiun' => $stasiun]);
    }

    public function tampilanHome(){
        return view('home');
    }


    public function cobak(){
        $stasiun = DB::table('stasiun')->get();
        return view('coba', ['stasiun' => $stasiun]);
    }
}
