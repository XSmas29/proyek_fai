@extends("template/seller")

@section('title')
    MyItem | Profile
@endsection

@section('navbar')
    @include("../template/navbar_seller")
@endsection

@section("main")
<div class="content col py-4">
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card py-1 px-2" style="border-radius: 1rem; min-width: 400px;">
                    <div class="card-body p-3">
                        <h1 class="text-center">My Profile</h1>
                    </div>
                    <div class="text-center my-3">
                        <img src="{{asset('profile/'.$user->gambar)}}" height="200" width="200" style="border-radius: 100px;">
                    </div>

                    <form method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row text-center my-3">
                            <div class="col-3">
                                <label class="col-form-label">Profile Picture</label>
                            </div>
                            <div class="col-8">
                                <input type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload" name="file">
                                @error("file")<small class="text-danger text-left"> ({{ $message }}) </small>@enderror
                            </div>
                        </div>

                        <div class="row text-center my-3">
                            <div class="col-3">
                                <label class="col-form-label">Password</label>
                            </div>
                            <div class="col-8">
                                <input type="password" class="form-control" aria-describedby="passwordHelpInline" name="pass">
                                @error("pass")<small class="text-danger text-left"> ({{ $message }}) </small>@enderror
                            </div>
                        </div>

                        <div class="text-center my-3">
                            <input class="btn btn-primary" type="submit" value="Update Picture" name="btnUpPict">
                            <input class="btn btn-primary" type="submit" value="Update Password" name="btnUpPass">
                        </div>
                    </form>
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
