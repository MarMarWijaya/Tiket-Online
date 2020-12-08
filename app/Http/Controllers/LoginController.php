<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
session_start();
class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    

    public function akun(){
        if(!isset($_SESSION['user'])){
            return view('login');
        }else {
            $user = DB::table('user')->where('email',$_SESSION['user'])->get();
            return view('akun', ['akun'=>$user]);
        }
    }

    public function editAkun($email){
        $err = "mantab"; 
        $user = DB::table('user')->where('email', $email)->get();
        return view('akun', ['akun'=>$user], ['err'=>$err]);
    }
    public function editAkunGo(Request $req){
        //password
        $user = DB::table('user')->where('email', $req->emailAsli)->get();

        //email
        if($req->email != $req->emailAsli){
            $cekEmail = DB::table('user')->where('email', $req->email)->first();
            if(isset($cekEmail)){
                $err = "<h4 style='color:red'>Email Sudah digunakan, silahkan gunakan email lain!</h4>";
                return view('akun', ['err'=> $err], ['akun'=>$user]);
            }
        }
        //cek password
        if($req->password == $user[0]->password){
            //update data infromasi user
            DB::table('user')->where('email', $req->emailAsli)->update([
                'nama' => $req->nama,
                'email' => $req->email,
                'hp' => $req->hp,
                'nik' => $req->nik
            ]);
            return redirect('/akun');
        }else{
            $err = "<h4 style='color:red'>Password Salah!</h4>";
            return view('akun', ['err'=> $err], ['akun'=>$user]);
        }


        
    }


    public function cek(Request $req){
        $email = $req->email;
        $password = $req->password;
        $user = DB::table('user')->where('email', '=', $email)->get();

        if(!isset($user[0]->email)){
            $err = "<h3 style='color:red'>Tidak ada akun dengan email <span style='color:blue'>".$email."</span>, Silahkan <a href='daftar'>daftar!</a></h3>";
            return view('login', ['err'=>$err]);
        }else{
            if($user[0]->password == $password){
                $_SESSION["user"] = $user[0]->email;
                return view('home', ['akun'=>$user]);
            }else{
                $err = "<h3 style='color:red'>Password salah!</h3>";
                return view('login', ['err'=>$err]);
            }
        }
    }
    public function daftar(){
        return view('daftar');
    }
    
    public function logout(){
        session_destroy();
        return view('/');
    }

    public function daftarGo(Request $req){
        $user = DB::table('user')->where('email', '=', $req->email)->get();
        if(isset($user[0]->email)){
            $err[0]= "<h3 style='color:red'>Email sudah digunakan!</h3>";
            return view('daftar', ['err'=>$err]);
        }else{
            if($req->password != $req->password2){
                $err[1] = "<h3 style='color:red'>Password tidak sama!</h3>";
                return view('daftar', ['err'=>$err]);
            }else{
                DB::table('user')->insert([
                    'nama' => $req->nama,
                    'email' => $req->email,
                    'password' => $req->password,
                    'hp' => $req->hp,
                    'nik' => $req->nik
                ]);
                $err= "<h3 style='color:green'>Akun Berhasil dibuat!</h3>";
                return view('login', ['err' =>$err]);
            }
        }
    }

}

