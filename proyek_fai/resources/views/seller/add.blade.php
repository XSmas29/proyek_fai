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
                <div class="card py-1 px-2" style="border-radius: 1rem; min-width: 400px;">
                    <div class="card-body p-3">
                        <h1 class="text-center">Add Product</h1>
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
