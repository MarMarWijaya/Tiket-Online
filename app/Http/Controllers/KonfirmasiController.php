<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KonfirmasiController extends Controller
{
    public function tampilkanPilihan(Request $req){
        //SELECT nama_kereta, awal, tujuan, jam_berangkat, jam_sampai, stok.tgl, stok.tgl_tujuan, gerbong.Kelas, kereta.id, gerbong.idKelas, stok.idStok 
        //FROM kereta
// JOIN gerbong ON kereta.id = gerbong.idKelas
// JOIN stok ON kereta.id = stok.idStok
// WHERE kereta.id = 1 AND gerbong.idKelas = 1 AND stok.idStok=1
        $kuota = 
        [
            [
                'dewasa' => $req->dewasa,
                'anak' => $req->anak
            ]
        ];
        $pilihan = DB::table('kereta')
        ->join('stok', 'kereta.id', '=', 'stok.id')
        ->join('gerbong', 'kereta.id', '=', 'gerbong.id')
        ->select('nama_kereta', 'awal', 'tujuan', 'jam_berangkat', 'jam_sampai', 'stok.tgl', 'stok.tgl_tujuan', 'gerbong.Kelas', 'sisa')
        ->where('kereta.id', $req->id_kereta)
        ->where('gerbong.idKelas', $req->id_kelas)
        ->where('stok.idStok', $req->id_stok)
        ->get();

        return view('konfirmasi', ['pilihan' => $pilihan], ['dewasa' => $req->dewasa, 'anak' => $req->anak]);
        
    }
}
