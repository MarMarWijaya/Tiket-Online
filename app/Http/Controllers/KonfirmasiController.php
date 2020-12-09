<?php

namespace App\Http\Controllers;
if(!isset($_SESSION)){
    session_start();
}
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
        ->where('stok.tgl', $req->tgl)
        ->get();
        return view('konfirmasi', ['pilihan' => $pilihan], ['dewasa' => $req->dewasa, 'anak' => $req->anak, 'tiba' => $tiba, 'tujuan' => $tujuan, 'idKelas' => $req->id_kelas]);
    }
    public function tampilkanPilihanWithLogin(Request $req){
        //koding get ifo user
        $email = $_SESSION["user"];
        $user = DB::table('user')->where('email', $email)->first();
        //Koding alsi
        $tiba = $req->tgl.$req->jam0;
        $tujuan = $req->tglTujuan.$req->jam1;
        
        $pilihan = DB::table('kereta')
        ->join('stok', 'kereta.idKereta', '=', 'stok.idKereta')
        ->join('gerbong', 'kereta.idKereta', '=', 'gerbong.idKereta')
        ->select('nama_kereta', 'awal', 'kereta.idKereta', 'stok.idStok', 'tujuan', 'jam_berangkat', 'jam_sampai', 'stok.tgl', 'stok.tgl_tujuan', 'gerbong.Kelas', 'sisa', 'gerbong.Harga')
        ->where('kereta.idKereta', $req->id_kereta)
        ->where('gerbong.idKelas', $req->id_kelas)
        ->where('stok.tgl', $req->tgl)
        ->get();
        return view('konfirmasi', ['pilihan'=>$pilihan, 'akun' =>$user, 'dewasa' => $req->dewasa, 'anak' => $req->anak, 'tiba' => $tiba, 'tujuan' => $tujuan, 'idKelas' => $req->id_kelas]);
    }
    public $data_sementara;
    public function checkout(Request $req){
        
        $idStok = $req->idStok;
        $idKereta = $req->idKereta;
        $idKelas = $req->idKelas;
        $namaPenumpang = implode("; ", $req->namaPenumpang);
        $emailPenumpang = implode("; ", $req->emailPenumpang);
        $hpPenumpang = implode("; ", $req->hpPenumpang);
        $nikPenumpang = implode("; ", $req->nikPenumpang);

        $berangkat = DB::table('stok')
            ->select('tgl', 'tgl_tujuan')
            ->join('kereta', 'kereta.idKereta', '=', 'stok.idKereta')
            ->where('kereta.idKereta', $idKereta)
            ->get();

        $noKursi = DB::table('pemesanan')
            ->select('gerbong', 'nomorKursi', 'idKelas')
            ->where('idKereta', $idKereta)
            ->where('idStok', $idStok)
            ->where('idKelas', $idKelas)
            ->orderBy('gerbong', 'asc')
            ->orderBy('nomorKursi', 'asc')
            ->get();
        
        $kelas = DB::table('gerbong')
        ->select('Kelas')
        ->where('idKelas', $idKelas)
        ->get();



        $jml = count($req->namaPenumpang);
        $_SESSION['jml'] = $jml;
        return view("pilihKursi", ['kursi' => $noKursi],[ 'kelas' => $kelas,
        'idKelas' => $idKelas,
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
        // $cek;
        if ( (count($array) !== count(array_unique($array)) )== 1){
            //ada isi yang sama
            return view("pembayaran", ['pesan' => 'Kursi tidak boleh sama']);
        }else{
            return view("pembayaran", [ 
                'jml' => $req->jml, 
                'idStok' => $req->idStok, 
                'idKereta' => $req->idKereta,
                'idKelas' => $req->idKelas,
                'kelas' => $req->kelas,
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
            'idKelas' => $req->idKelas,
            'kelas' => $req->kelas,
            'berangkat' => $req->berangkat,
            'tiba' => $req->tiba,
            'gerbong' => $req->gerbong,
            'nomorKursi' => $req->kursi,
            'harga' => $req->harga
        ]);
        return view("home", ['msg' => 'Terimakasih']);
    }
    
}
