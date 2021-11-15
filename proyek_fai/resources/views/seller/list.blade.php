@extends("template/seller")

@section('title')
    MyItem | Product List
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
                            <h1 class="mb-5 text-center">List Product</h1>
                            @if (count($dataproduk) == 0)
                                <h4 class="text-center pt-4">No Data</h4>
                            @else
                                <table class="table table-striped text-center align-middle">
                                    <thead class="table-dark">
                                        <th>ID</th>
                                        <th>Product Name</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Stock</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($dataproduk as $produk)
                                        <tr>
                                            <td><?=$produk->id?></td>
                                            <td><?=$produk->nama?></td>
                                            <td><?=$produk->kategori->nama?></td>
                                            <td><?=$produk->harga?></td>
                                            <td><?=$produk->stok?></td>
                                            <td>
                                                <button class="btn btn-primary btn-sm btn-rounded px-3 text-light" name="btnDetail">View</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center mt-2">
                                    {!! $dataproduk->links("pagination::bootstrap-4") !!}
                                </div>
                            @endif
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
