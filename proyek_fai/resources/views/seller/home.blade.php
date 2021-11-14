@extends("template/seller")

@section('title')
    MyItem | Home
@endsection

@section('navbar')
    @include("../template/navbar_seller")
@endsection

@section("main")
<div class="col py-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card" style="border-radius: 1rem; min-width: 400px;">
                    <div class="card-body p-4">
                        <div class="my-md-3 pb-1">
                            Welcome, <?= session()->get("login")->username?>
                        </div>

                    </div>
                    <div class="text-center bg-danger text-light my-5" <?php echo (session()->get("msg") == '') ? '' : 'style="border-radius: 20px; height: 80px; font-size:18pt; padding-top: 20px"'; ?>>{{session()->get("msg") ?? ""}}</div>
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
