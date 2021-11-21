@extends("template/customer")

@section('title')
    MyItem | Detail Produk
@endsection

@section('navbar')
    @include("../template/navbar_customer")
@endsection

@section("main")
<div class="container-fluid">
    <div class="row py-4" style="height: 764px">
        <div class="col-2"></div>
        <div class="col-6">
            <div class="card" style="border-radius: 1rem; min-width: 800px;">
                <div class="card-body p-3">
                    <div class="" style="height: 320px; border-radius: 10px; float: left;">
                        <img class="my-2 ms-2 me-4" src="{{asset('produk/'.$produk->gambar.'')}}" width="320px" style="border-radius: 5px;">
                    </div>
                    <div class="fs-1 mb-4"><?= $produk->nama ?></div>
                    <div class="fs-4 mt-2 mb-4 fw-bold">Rp. <?= $produk->harga ?></div>

                    <button class="btn position-relative p-0 me-5 m-0 btn-wishlist">
                        <i class="bi-heart{{ $wishlist === 1 ? "-fill" : "" }}" style="font-size: 2em; color: #ff0015;"></i>
                    </button>

                    <div class="fs-5 ps-2" style="clear: left">Deskripsi Produk :</div>
                    <div class="fs-6 pt-2 ps-2"><?= $produk->deskripsi ?></div>
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="card" style="border-radius: 1rem; min-width: 250px">
                <form action="" method="post">
                    @csrf
                    <div class="card-body p-2 text-center">
                        <div class="fs-4 mb-4">Set Amount</div>
                        <label class="my-2">Stok : <?= $produk->stok; ?></label>
                        <input type="number" name="jumlah" id="jumlah" class="form-control" placeholder="Jumlah" onchange="cekStok(this.value)" value="1"/>
                        <label id="subtotal" class="mt-5 fs-5">Subtotal : Rp. 0</label>
                        <div class="d-grid gap-2 col-6 mx-auto mt-4 mb-2">
                            <input type="submit" name="btncart" class="btn btn-primary" value="+ Cart">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function cekStok(val){
        if (Math.round('<?=$produk->stok?>') > val){
            if (val >= 1){
                document.getElementById("subtotal").innerHTML ='Subtotal : Rp. ' + (val * Math.round('<?=$produk->harga?>'));
            }
            else{
                document.getElementById("jumlah").value = 1;
            }
        }
        else{
            document.getElementById("jumlah").value = Math.round('<?=$produk->stok?>');
        }
    }
    $(function(){
        $(".btn-wishlist").click(function() {
            $.post("{{ url('/customer/detail/') }}/"+'<?=$produk->id?>', {_method: "POST",
            _token: "{{csrf_token()}}"}, function(r){
                let count = parseInt($("#countwishlist").html());
                if ($(".btn-wishlist").children().attr("class") == "bi-heart"){
                    $(".btn-wishlist").children().attr("class", "bi-heart-fill");
                    $("#countwishlist").html(count + 1);
                }
                else{
                    $(".btn-wishlist").children().attr("class", "bi-heart");
                    $("#countwishlist").html(count - 1);
                }
            }).fail(function(r) {
                alert( "HTTP : " + r.statusText
                    + ", Msg" + r.responseText);
                console.log(r);
            });
        });
    });
</script>

@endsection

@section('footer')
    @include("../template/footer")
@endsection


