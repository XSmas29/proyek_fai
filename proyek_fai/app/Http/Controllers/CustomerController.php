<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Wishlist;

class CustomerController extends Controller
{

    public function formHome(){
        $countwishlist = count(Wishlist::select('*')->where('fk_user', '=', session()->get("login")->username)->get());
        $datacarousel = Barang::inRandomOrder()->limit(5)->get();
        $datakategori = Kategori::all();
        return view("customer/home",[
            "datacarousel" => $datacarousel,
            "datakategori" => $datakategori,
            "countwishlist" => $countwishlist
        ]);
    }

    public function formDetail($id){
        $countwishlist = count(Wishlist::select('*')->where('fk_user', '=', session()->get("login")->username)->get());
        $produk = Barang::find($id);

        $wishlist = Wishlist::select('*')
                ->where('fk_user', '=', session()->get("login")->username)
                ->where('fk_barang', '=', $id)
                ->get();

        return view("customer/detail",[
            "produk" => $produk,
            "wishlist" => count($wishlist),
            "countwishlist" => $countwishlist
        ]);
    }

    public function add(Request $request, $id){
        $countwishlist = count(Wishlist::select('*')->where('fk_user', '=', session()->get("login")->username)->get());
        if($request->btncart){//add to cart
            $datacart = json_decode(session()->get("datacart"), true) ?? [];
            $harga = Barang::find($id)->harga;

            $newcart = [
                "id" => $id,
                "jumlah" => $request->jumlah,
                "subtotal" => $harga * $request->jumlah
            ];

            $datacart[] = $newcart;

            session()->put("datacart", json_encode($datacart));

            return redirect("/customer")->with("msg", "Product Added to Your Cart!");
        }
        else{//add to wishlist
            $cekwishlist = Wishlist::select('*')
            ->where('fk_user', '=', session()->get("login")->username)
            ->where('fk_barang', '=', $id)
            ->get();

            if (count($cekwishlist) == 0){
                $wishlist = new Wishlist();
                $wishlist->fk_user = session()->get("login")->username;
                $wishlist->fk_barang = $id;
                $wishlist->save();
            }
            else{
                $cekwishlist[0]->delete();
            }
        }

    }
}
