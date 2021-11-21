@extends("template/customer")

@section('title')
    MyItem | Home
@endsection

@section('navbar')
    @include("../template/navbar_customer")
@endsection

@section("main")
<div class="container-fluid">
    <div class="text-center bg-success text-light">{{session()->get("msg") ?? ""}}</div>
    <div class="row py-4">
        <div class="col-2"></div>
        <div class="col-8">
            <h2 class="text-center pb-4">Featured Products</h2>
            <div id="carouselExampleCaptions" class="carousel slide w-100 align-middle" style="height: 500px" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner bg-dark rounded">
                    <?= $i = 0 ?>
                    @foreach ($datacarousel as $carousel)
                        <div class="carousel-item <?php if ($i == 0) echo 'active'?>">
                            <a href="{{url('/customer/detail/'.$carousel->id.'')}}">
                                <img src="{{url('produk/'.$carousel->gambar.'')}}" class="d-block" width="100%" height="500px" style="object-fit: contain !important">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5><?=$carousel->nama?></h5>
                                    <p><?=$carousel->deskripsi?></p>
                                </div>
                            </a>
                        </div>
                        <?= $i += 1 ?>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
    @foreach ($datakategori as $kategori)
        <div class="row d-flex mx-5">
            <div class="kategori" style="margin-top: 100px; margin-bottom:30px">
                <h2>Products in <?= $kategori->nama?> That You Might Like</h2>
            </div>

        @foreach ($kategori->products as $product)
            <div class="col-2">
                <div class="card" style="border-radius: 1rem; height: 500px; min-width: 265px">
                    <div class="card-body p-2 text-center">
                        <div class="bg-light" style="height: 245px; border-radius: 10px">
                            <img class="my-3" src="{{asset('produk/'.$product->gambar.'')}}" width="245px" style="border-radius: 10px;">
                        </div>
                        <div class="info mt-4">
                            <div class="fs-5 mx-4 mb-4"><?= $product->nama ?></div>
                            <div class="fs-5 mt-2 mb-2 fw-bold">Rp. <?= $product->harga ?></div>
                            <a href="{{ url('/customer/detail/'.$product->id.'')}}"><button class="btn btn-primary my-2 px-5">More Details</button></a><br>
                            <img style="border-radius: 22px" src="{{ asset('profile/'.$product->owner->gambar.'') }}" width="44px" height="44px" class="me-3 mt-2 mb-2"><?= $product->owner->toko ?>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    @endforeach
</div>
@endsection

@section('footer')
    @include("../template/footer")
@endsection
