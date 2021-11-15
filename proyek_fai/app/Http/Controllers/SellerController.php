<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HTrans;
use App\Models\Kategori;
use App\Models\Barang;

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

    public function formAdd(){
        $datakategori = Kategori::all();
        return view("seller/add",[
            "datakategori" => $datakategori
        ]);
    }

    public function addProduk(Request $request){
        $validation = [
            "nama" => ["required"],
            "harga" => ["required", "numeric", "min:10000"],
            "stok" => ["required", "numeric", "min:1"],
            "kategori" => ["required", "numeric", "min:1"],
            "gambar" => ["required", "mimes:jpg,jpeg,png"],
            "deskripsi" => ["required"]
        ];
        $this->validate($request, $validation);

        $ext = $request->file('gambar')->getClientOriginalExtension();

        $barang = new Barang();
        $barang->fk_seller = session()->get("login")->username;
        $barang->fk_kategori = $request->kategori;
        $barang->nama = $request->nama;
        $barang->deskripsi = $request->deskripsi;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;
        $barang->save();

        $barang->gambar = 'produk_'.$barang->id.'.'.$ext;
        $barang->save();

        $gambar = $request->file('gambar');
        $gambar->move('produk', 'produk_'.$barang->id.'.'.$ext);

        return redirect("/seller/product/add")->with("msg", "New Product Added!");
    }

    public function listProduk(){
        $dataproduk = Barang::where("fk_seller", session()->get("login")->username)->paginate(2);
        return view("seller/list",[
            "dataproduk" => $dataproduk
        ]);
    }
}
