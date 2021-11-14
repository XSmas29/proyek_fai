<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Rules\UsernameRule;
use App\Rules\EmailRule;
use App\Rules\PasswordRule;
use App\Models\User;

class AccountController extends Controller
{
    public function login(Request $request){
        $validation = [
            "username" => ["required"],
            "password" => ["required"]
        ];
        $this->validate($request, $validation);

        $datauser = User::all();
        $isMatch = false;
        foreach ($datauser as $user){
            if ($request->username == $user->username || $request->username == $user->email){
                if ($request->password == $user->password){
                    $isMatch = true;
                    session()->put("login", $user);
                    if ($user->role == "CUSTOMER"){
                        return redirect("/customer");
                    }
                    else if ($user->role == "SELLER"){
                        return redirect("/seller");
                    }
                }
                else{
                    return redirect("/login")->with("msg", "Wrong Password!");
                }
            }
        }
        if (!$isMatch){
            return redirect("/login")->with("msg", "User not Found!");
        }
    }

    public function register(Request $req){
        $validation = [
            "username" => ["required", new UsernameRule, "alpha_num"],
            "email" => ["required", new EmailRule, "email"],
            "nama" => ["required", "alpha"],
            "rekening" => ["required", "numeric"],
            "password" => ["required", "min:8", new PasswordRule, "confirmed"],
            "password_confirmation" => ["required"],
            "role" => ["required"],
        ];
        $this->validate($req, $validation);


        if ($req->role == "customer") {
            DB::insert('INSERT INTO `user`(`username`, `password`, `email`, `nama`, `rekening`, `toko`, `role`) VALUES (?, ?, ?, ?, ?, ?, ?)', [$req->username, $req->password, $req->email, $req->nama, $req->rekening, "", "CUSTOMER"]);
            // echo "Ahaha";
        }
        else{
            $validation = ["toko" => 'required'];
            $req->validate($validation);

            DB::insert('INSERT INTO `user`(`username`, `password`, `email`, `nama`, `rekening`, `toko`, `role`) VALUES (?, ?, ?, ?, ?, ?, ?)', [$req->username, $req->password, $req->email, $req->nama, $req->rekening, $req->toko, "SELLER"]);
        }
        return redirect('/register')->with("msg", "Berhasil Register!");
    }
}
