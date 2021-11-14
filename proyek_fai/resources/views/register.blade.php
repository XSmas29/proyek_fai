@extends("template/main")

@section('title')
    MyItem | Register
@endsection

@section("main")
<div class="text-center bg-success text-light">{{session()->get("msg") ?? ""}}</div>
<div class="container">
    <div class="d-flex align-items-center h-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="card-body py-1 px-4">
                            <div class="my-md-3">
                                <form method="POST">
                                    @csrf
                                    <h1 class="fw-bold mb-4 text-center">Register</h1>
                                    <i class="fas fa-user-astronaut fa-3x my-5"></i>
                                    @error("username")<small class="text-danger text-left"> ({{ $message }}) </small>@enderror
                                    <div class="form-outline mb-3">
                                        <input type="text" name="username" class="form-control form-control-lg" placeholder="Username" value="{{ old('username') }}"/>
                                    </div>
                                    @error("email")<small class="text-danger text-left"> ({{ $message }}) </small>@enderror
                                    <div class="form-outline mb-3">
                                        <input type="text" name="email" class="form-control form-control-lg" placeholder="Email" value="{{ old('email') }}"/>
                                    </div>
                                    @error("nama")<small class="text-danger text-left"> ({{ $message }}) </small>@enderror
                                    <div class="form-outline mb-3">
                                        <input type="text" name="nama" class="form-control form-control-lg" placeholder="Nama Lengkap" value="{{ old('nama') }}"/>
                                    </div>
                                    @error("rekening")<small class="text-danger text-left"> ({{ $message }}) </small>@enderror
                                    <div class="form-outline mb-3">
                                        <input type="text" name="rekening" class="form-control form-control-lg" placeholder="No Rekening" value="{{ old('rekening') }}"/>
                                    </div>
                                    @error("password")<small class="text-danger text-left"> ({{ $message }}) </small>@enderror
                                    <div class="form-outline mb-3">
                                        <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" value="{{ old('password') }}"/>
                                    </div>
                                    @error("password_confirmation")<small class="text-danger text-left"> ({{ $message }}) </small>@enderror
                                    <div class="form-outline mb-3">
                                        <input type="password" name="password_confirmation" class="form-control form-control-lg" placeholder="Re-type Password" value="{{ old('password') }}"/>

                                    </div>
                                    @error("toko")<small class="text-danger text-left"> ({{ $message }}) </small>@enderror
                                    <div class="form-outline mb-3">
                                        <input type="text" name="toko" id='txtToko' class="form-control form-control-lg" placeholder="Toko"/>
                                    </div>
                                    @error("role")<small class="text-danger text-left"> ({{ $message }}) </small>@enderror
                                    <div class="text-center">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" name="role" value="customer" id="rbCustomer" onclick="toggleToko(1)" checked>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                            Customer
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" name="role" value="seller" onclick="toggleToko(0)" id="rbSeller">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                            Seller
                                            </label>
                                        </div>
                                        <br>
                                        <input class="btn btn-primary btn-lg btn-rounded px-5 text-light mt-3" type="submit" name="btnRegister" value="Register">
                                        </div>
                                    </div>
                                </form>
                            <div class="text-center">
                                <p class="mb-3">Already have an account? <a href="{{ url('/login') }}" class="text-body fw-bold mb-2">Login</a></p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
</div>

{{$msg ?? ""}}
@endsection


<script>
    window.onload = function(e){
        toggleToko(1);
    }
    let rbCustomer = document.getElementById("rbCustomer");
    let rbSeller = document.getElementById("rbSeller");

    rbCustomer.onclick = disableToko();

    function toggleToko(i){
        document.getElementById('txtToko').disabled = i;
        if (i == 1){
            document.getElementById('txtToko').value = "";
        }
    }
</script>

<style>
    .form-control:focus {
        border-color: #ff80ff;
        box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px rgba(255, 100, 255, 0.5);
    }
</style>

