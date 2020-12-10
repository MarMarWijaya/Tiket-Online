<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class AdminController extends Controller
{
    public function homeAdmin(){
        return view('homeAdmin');
    }
    public function logout(){
        Auth::logout();
        return redirect("/login");
    }
    //Stasiun
    public function home(){
        $stasiun = DB::table('stasiun')->get();
        return view('tampil',['stasiun'=>$stasiun]);
    }
    public function hapus($letak){
        DB::table('stasiun')->where('letak',$letak)->delete();
        return redirect('/home');
    }
    public function tambah(){
        return view('tambah');
    }
    public function simpan(Request $req){
        DB::table('stasiun')->insert(
            [
                'letak' => $req->letak
            ]
        );
        return redirect('/home');
    }
    public function getByID(Request $req){
        $ID = $req->id;
        $stasiun = DB::table('stasiun')->get();
        return view('tampil', ['id' => $ID], ['stasiun' => $stasiun]);
    }
    public function edit($letak){
        $hasil = DB::table('stasiun')->where('letak',$letak)->get();
        return view('edit',['hasil'=>$hasil]);
    }
    public function ubah(Request $req){
        DB::table('stasiun')->where('letak',$req->letak1)->update(
            [
                'letak' => $req->letak2
            ]
        );

        return redirect('/home'); 
    }
    //Stok
    public function stok(){
        $stok = DB::table('stok')->get();
        
        $idKereta = DB::table('kereta')
        ->select('idKereta')
        ->get();
        return view('tampilStok',['stok'=>$stok], ['idKereta' => $idKereta]);
    }
    public function hapusStok($idStok){
        DB::table('stok')->where('idStok',$idStok)->delete();
        return redirect('/stok');
    }
    public function tambahStok(){
        return view('tambahStok');
    }
    public function simpanStok(Request $req){
        DB::table('stok')->insert(
            [
                'tgl' => $req->tgl,
                'tgl_tujuan' => $req->tgl_tujuan,
                'idKereta' => $req->idKereta
            ]
        );
        return redirect('/stok');
    }
    public function editStok(Request $req){
        $hasil = DB::table('stok')->where('idStok',$req->idStok)->get();
        
        $idKereta = DB::table('kereta')
        ->select('idKereta')
        ->get();

        $newID = DB::table('stok')
        ->select('idKereta')
        ->where('idStok', $req->idStok)
        ->get();
        return view('editStok',['hasil'=>$hasil], ['idKereta' => $idKereta, 'idKeretaEdit' => $req->idKereta]);
    }
    public function ubahStok(Request $req){
        DB::table('stok')
        ->where('idStok',$req->idStok)
        ->update(
            [
                'tgl' => $req->tgl,
                'tgl_tujuan' => $req->tgl_tujuan,
                'idKereta' => $req->idKereta
            ]
        );
        return redirect('/stok'); 
    }

    //Gerbong
    public function gerbong(){
        $gerbong = DB::table('gerbong')->get();
        
        $idKereta = DB::table('kereta')
        ->select('idKereta')
        ->get();
        return view('tampilGerbong',['gerbong'=>$gerbong], ['idKereta' => $idKereta]);
    }
    public function hapusGerbong($idKelas){
        DB::table('gerbong')->where('idKelas',$idKelas)->delete();
        return redirect('/gerbong');
    }
    public function tambahGerbong(){
        return view('tambahGerbong');
    }
    public function simpanGerbong(Request $req){
        DB::table('gerbong')->insert(
            [
                'Kelas' => $req->Kelas,
                'Harga' => $req->Harga,
                'Sisa' => $req->Sisa,
                'idKereta' => $req->idKereta
            ]
        );
        return redirect('/gerbong');
    }
    public function editGerbong(Request $req){
        $hasil = DB::table('gerbong')->where('idKelas',$req->idKelas)->get();
        
        $idKereta = DB::table('kereta')
        ->select('idKereta')
        ->get();

        $newID = DB::table('gerbong')
        ->select('idKereta')
        ->where('idKelas', $req->idKelas)
        ->get();
        return view('editGerbong',['hasil'=>$hasil], ['idKereta' => $idKereta, 'idKeretaEdit' => $req->idKereta]);
    }
    public function ubahGerbong(Request $req){
        DB::table('gerbong')
        ->where('idKelas',$req->idKelas)
        ->update(
            [
                'Kelas' => $req->Kelas,
                'Harga' => $req->Harga,
                'idKereta' => $req->idKereta
            ]
        );
        return redirect('/gerbong'); 
    }

    //Kereta
    public function kereta(){
        $kereta = DB::table('kereta')->get();
        return view('tampilKereta',['kereta'=>$kereta]);
    }
    public function hapusKereta($idKereta){
        try{
            DB::table('kereta')->where('idKereta',$idKereta)->delete();
            return redirect('/kereta');
        }catch(SQLException $e){
            return redirect('/kereta')->with(['msg' => "gagal"]);
        }
        
    }
    public function tambahKereta(){
        return view('tambahKereta');
    }
    public function simpanKereta(Request $req){
        DB::table('kereta')->insert(
            [   
                'idKereta' => $req->idKereta,
                'nama_kereta' => $req->nama_kereta,
                'awal' => $req->awal,
                'tujuan' => $req->tujuan,
                'jam_berangkat' => $req->jam_berangkat,
                'jam_sampai' => $req->jam_sampai
            ]
        );
        return redirect('/kereta');
    }
    public function editKereta(Request $req){
        $hasil = DB::table('kereta')->where('idKereta',$req->idKereta)->get();

        return view('editKereta',['hasil'=>$hasil]);
    }
    public function ubahKereta(Request $req){
        DB::table('kereta')
        ->where('idKereta',$req->idKereta)
        ->update(
            [
                'idKereta' => $req->idKereta,
                'nama_kereta' => $req->nama_kereta,
                'awal' => $req->awal,
                'tujuan' => $req->tujuan,
                'jam_berangkat' => $req->jam_berangkat,
                'jam_sampai' => $req->jam_sampai
            ]
        );
        return redirect('/kereta'); 
    }
    //Pemesanan
    public function pemesanan(){
        $pemesanan = DB::table('pemesanan')->get();
        return view('tampilPemesanan',['pemesanan'=>$pemesanan]);
    }
    public function detailPemesanan(Request $req){
        $hasil = DB::table('pemesanan')->where('idPemesanan',$req->idPemesanan)->get();

        return view('detailPemesanan',['hasil'=>$hasil]);
    }
    public function fixPemesanan(Request $req){
        return redirect('/pemesanan'); 
    }
}
