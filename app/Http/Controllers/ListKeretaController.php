<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListKeretaController extends Controller
{
    public function index(){
        $stasiun = DB::table('stasiun')->get();
        return view('home', ['stasiun' => $stasiun]);
    }

    public function tampilkan_kereta(Request $req){
        $stasiun = DB::table('stasiun')->get();
        $kereta = DB::table('kereta')
        ->rightJoin('stok', 'kereta.id', '=', 'stok.id')
        ->select('nama_kereta', 'awal', 'tujuan', 'jam_berangkat', 'jam_sampai', 'sisa')
        ->where('tgl', $req->date)
        ->where('awal', $req->asal)
        ->where('tujuan', $req->tujuan)
        ->get()
        ;
        return view('home', ['kereta' => $kereta], ['stasiun' => $stasiun]);
    }
}
