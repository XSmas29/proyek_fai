@extends("template/seller")

@section('title')
    MyItem | Add Product
@endsection

@section('navbar')
    @include("../template/navbar_seller")
@endsection

@section("main")
<div class="content col py-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center bg-success text-light" style="border-radius: 10px">{{session()->get("msg") ?? ""}}</div>
                <div class="card" style="border-radius: 1rem; min-width: 400px;">
                    <div class="card-body p-4">
                        <div class="my-md-1">
                            <form method="POST" enctype="multipart/form-data">
                                @csrf
                                <h1 class="mb-5 text-center">Add Product</h1>
                                <div class="row">
                                    <div class="col-6">
                                        @error("nama")<small class="text-danger text-left"> ({{ $message }}) </small>@enderror
                                        <div class="form-floating mb-5">
                                            <input type="text" name="nama" id="nama" class="form-control" placeholder="nama" value="{{old('nama')}}"/>
                                            <label for="nama" class="text-secondary">Product Name</label>
                                        </div>
                                        @error("harga")<small class="text-danger text-left"> ({{ $message }}) </small>@enderror
                                        <div class="form-floating mb-5">
                                            <input type="number" name="harga" id="harga" class="form-control" placeholder="price" value="{{old('harga')}}"/>
                                            <label for="harga" class="text-secondary">Price</label>
                                        </div>
                                        @error("stok")<small class="text-danger text-left"> ({{ $message }}) </small>@enderror
                                        <div class="form-floating mb-5">
                                            <input type="number" name="stok" id="stok" class="form-control" placeholder="stock" value="{{old('stok')}}"/>
                                            <label for="stok" class="text-secondary">Stock</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        @error("kategori")<small class="text-danger text-left"> ({{ $message }}) </small>@enderror
                                        <div class="form-floating mb-4">
                                            <select class="form-select" id="kategori" name="kategori">
                                                <option value=-1 selected>Select a Category</option>
                                                @foreach ($datakategori as $kategori)
                                                    <option <?php if(old('kategori') == $kategori->id) echo "selected"?> value=<?=$kategori->id?>><?=$kategori->nama?></option>
                                                @endforeach
                                            </select>
                                            <label for="kategori" class="text-secondary">Category</label>
                                        </div>
                                        <label for="gambar" class="form-label">Product Image</label>
                                        @error("gambar")<small class="text-danger text-left"> ({{ $message }}) </small>@enderror
                                        <div class="mb-4">
                                            <input class="form-control" type="file" id="gambar" name="gambar">
                                        </div>
                                        <div class="mb-3">
                                            <label for="deskripsi" class="form-label">Product Description</label>
                                            @error("deskripsi")<small class="text-danger text-left"> ({{ $message }}) </small>@enderror
                                            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="5">{{old('deskripsi')}}</textarea>
                                        </div>
                                    </div>
                                    <div class="text-center mt-5">
                                        <input class="btn btn-primary btn-lg btn-rounded px-5 text-light" type="submit" value="Add Product" name="btnAdd">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



</div>
</div>
@endsection

@section('footer')
    @include("../template/footer")
@endsection
