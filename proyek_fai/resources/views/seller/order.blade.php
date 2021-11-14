@extends("template/seller")

@section('title')
    MyItem | Orders
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
                        <h1 class="text-center"><?= $header ?></h1>
                    </div>
                    @if (count($dataorder) == 0)
                        <h4 class="text-center pt-4">No Data</h4>
                    @else
                        <table class="table table-striped text-center align-middle">
                            <thead class="table-dark">
                                <th>ID</th>
                                <th>Customer</th>
                                <th>Grandtotal</th>
                                <th>Date</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($dataorder as $order)
                                <tr>
                                    <td><?=$order->id?></td>
                                    <td><?=$order->fk_customer?></td>
                                    <td><?=$order->grandtotal?></td>
                                    <td><?=$order->tanggal?></td>
                                    <td>
                                        <button class="btn btn-primary btn-sm btn-rounded px-3 text-light" name="btnDetail">View</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center mt-2">
                            {!! $dataorder->links("pagination::bootstrap-4") !!}
                        </div>
                    @endif
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
