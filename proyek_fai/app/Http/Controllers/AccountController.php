<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function login(){

    }

    public function register(Request $req){
        if ($req->pass != $req->pass_confirmation) {
            return view('register', [
                'msg' => 'Password dan Konfirmasi Password tidak sesuai'
            ]);
        }

        $found = false;
        $dataUser = DB::select('SELECT * FROM user');
        foreach ($dataUser as $d) {
            if ($req->username == $d->username || $req->email == $d->email) {
                $found = true;
            }
        }
        if ($found) {
            return view('register', [
                'msg' => 'Username/Email telah digunakan'
            ]);
        }
        if ($req->rb == "rbC") {
            DB::insert('INSERT INTO `user`(`username`, `password`, `email`, `nama`, `rekening`, `toko`, `role`) VALUES (?, ?, ?, ?, ?, ?, ?)', [$req->username, $req->pass, $req->email, $req->nama, $req->rekening, "", "CUSTOMER"]);
            // echo "Ahaha";
        }
        else{
            $validation = ["toko" => 'required'];
            $req->validate($validation);

            DB::insert('INSERT INTO `user`(`username`, `password`, `email`, `nama`, `rekening`, `toko`, `role`) VALUES (?, ?, ?, ?, ?, ?, ?)', [$req->username, $req->pass, $req->email, $req->nama, $req->rekening, $req->toko, "SELLER"]);
        }



        return redirect('/login');
    }
}
