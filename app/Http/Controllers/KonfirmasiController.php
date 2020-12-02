<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KonfirmasiController extends Controller
{


    public function tampilkanPilihan(Request $req){
        $tiba = $req->tgl.$req->jam0;
        $tujuan = $req->tglTujuan.$req->jam1;
        
        $pilihan = DB::table('kereta')
        ->join('stok', 'kereta.idKereta', '=', 'stok.idKereta')
        ->join('gerbong', 'kereta.idKereta', '=', 'gerbong.idKereta')
        ->select('nama_kereta', 'awal', 'kereta.idKereta', 'stok.idStok', 'tujuan', 'jam_berangkat', 'jam_sampai', 'stok.tgl', 'stok.tgl_tujuan', 'gerbong.Kelas', 'sisa', 'gerbong.Harga')
        ->where('kereta.idKereta', $req->id_kereta)
        ->where('gerbong.idKelas', $req->id_kelas)
        ->where('stok.idStok', $req->id_stok)
        ->get();
        return view('konfirmasi', ['pilihan' => $pilihan], ['dewasa' => $req->dewasa, 'anak' => $req->anak, 'tiba' => $tiba, 'tujuan' => $tujuan]);
    }
    public $data_sementara;
    public function checkout(Request $req){
        
        $idStok = $req->idStok;
        $idKereta = $req->idKereta;
        $namaPenumpang = implode(" ", $req->namaPenumpang);
        $emailPenumpang = implode(" ", $req->emailPenumpang);
        $hpPenumpang = implode(" ", $req->hpPenumpang);
        $nikPenumpang = implode(" ", $req->nikPenumpang);

        $berangkat = DB::table('stok')
            ->select('tgl', 'tgl_tujuan')
            ->join('kereta', 'kereta.idKereta', '=', 'stok.idKereta')
            ->where('kereta.idKereta', $idKereta)
            ->get();

        

        $noKursi = DB::table('pemesanan')
            ->select('gerbong', 'nomorKursi')
            ->join('kereta', 'kereta.idKereta', '=', 'pemesanan.idKereta')
            ->join('stok', 'stok.idKereta', '=', 'kereta.idKereta')
            ->where('kereta.idKereta', $idKereta)
            ->where('stok.idStok', $idStok)
            ->get();
        


        session_start();
        $jml = count($req->namaPenumpang);
        $_SESSION['jml'] = $jml;
        return view("pilihKursi", ['kursi' => $noKursi], [
        'jml' => $jml, 
        'idStok' => $idStok, 
        'idKereta' => $idKereta,
        "berangkat" => $req->tiba,
        "tiba" => $req->tujuan, 
        "namaPemesan" => $req->namaPemesan,
        "emailPemesan" => $req->emailPemesan,
        "hpPemesan" => $req->hpPemesan,
        "nikPemesan" => $req->nikPemesan,
        "namaPenumpang" => $namaPenumpang,
        "emailPenumpang" => $emailPenumpang,
        "hpPenumpang" => $hpPenumpang,
        "nikPenumpang" => $nikPenumpang,
        "harga" => $req->harga]);
    }

    public function validasiKursi(Request $req){
        $array = array();

        $str = implode(" ", $req->kursiPilihan);
        $gerbong = substr($str, 0, 1);
        $kurs = substr($str, 1, strlen($str));

        for ($i=0; $i < $req->jml ; $i++) { 
            $array[$i] = $req->kursiPilihan[$i];
        }
        $cek;
        if ( (count($array) !== count(array_unique($array)) )== 1){
            //ada isi yang sama
            return view("percobaan", ['pesan' => 'Kursi tidak boleh sama']);
        }else{
            return view("percobaan", ['pesan' => 'Simpan ke DB', 
                'jml' => $req->jml, 
                'idStok' => $req->idStok, 
                'idKereta' => $req->idKereta,
                "berangkat" => $req->berangkat,
                "tiba" => $req->tiba, 
                "namaPemesan" => $req->namaPemesan,
                "emailPemesan" => $req->emailPemesan,
                "hpPemesan" => $req->hpPemesan,
                "nikPemesan" => $req->nikPemesan,
                "namaPenumpang" => $req->namaPenumpang,
                "emailPenumpang" => $req->emailPenumpang,
                "hpPenumpang" => $req->hpPenumpang,
                "nikPenumpang" => $req->nikPenumpang,
                "gerbong" => $gerbong,
                "noKursi" => $kurs,
                "harga" => $req->harga
            ]);
        }
        
    }

    public function pilihGerbong(Request $req){
        
            $noKursi = DB::table('pemesanan')
            ->select('gerbong', 'nomorKursi')
            ->join('kereta', 'kereta.idKereta', '=', 'pemesanan.idKereta')
            ->join('stok', 'stok.idKereta', '=', 'kereta.idKereta')
            ->where('kereta.idKereta', $req->idKereta)
            ->where('stok.idStok', $req->idStok)
            ->where('gerbong', $req->gerbong)
            ->get();

        return view("pilihKursi", ['jml' => $req->jml], ['kursi' => $noKursi, 'idStok' => $req->idStok, 'idKereta' => $req->idKereta]);
    }

    public function validasiAkhir(Request $req){
        DB::table('pemesanan')
        ->insert([
            'namaPemesan' => $req->namaPemesan,
            'emailPemesan' => $req->emailPemesan,
            'hpPemesan' => $req->hpPemesan,
            'nikPemesan' => $req->nikPemesan,
            'namaPenumpang' => $req->namaPenumpang,
            'nikPenumpang' => $req->nikPenumpang,
            'hpPenumpang' => $req->hpPenumpang,
            'emailPenumpang' => $req->emailPenumpang,
            'idKereta' => $req->idKereta,
            'idStok' => $req->idStok,
            'berangkat' => $req->berangkat,
            'tiba' => $req->tiba,
            'gerbong' => $req->gerbong,
            'nomorKursi' => $req->kursi,
            'harga' => $req->harga
        ]);
        return view("home", ['msg' => 'Terimakasih']);
    }
    
}