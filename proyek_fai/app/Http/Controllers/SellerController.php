<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HTrans;

class SellerController extends Controller
{
    public function listOrder(){
        $dataorder = HTrans::where("fk_seller", session()->get("login")->username)->paginate(10);
        $header = ucfirst($_GET["status"])." Orders";
        if ($_GET["status"] != "all"){
            $dataorder = HTrans::where("status", $_GET["status"])->paginate(10);

        }
        $dataorder->withPath(url('/seller/order?status=all'));
        return view("seller/order",[
            "dataorder" => $dataorder,
            "header" => $header
        ]);
    }
}
