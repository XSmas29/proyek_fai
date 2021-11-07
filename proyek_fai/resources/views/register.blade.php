@extends("template/main")

@section('title')
    MyItem | Login
@endsection

@section("main")


<div class="container">
    <div class="d-flex align-items-center h-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="card-body p-4 text-center">
                            <div class="my-md-4 pb-4">
                                <form method="POST">
                                    @csrf
                                    <h1 class="fw-bold mb-5">Register</h1>
                                    <i class="fas fa-user-astronaut fa-3x my-5"></i>
                                    <div class="form-outline mb-4">
                                        <input type="text" name="username" class="form-control form-control-lg" placeholder="Username" required/>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" required/>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="text" name="nama" class="form-control form-control-lg" placeholder="Nama Lengkap" required/>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="text" name="rekening" class="form-control form-control-lg" placeholder="No Rekening" required/>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="password" name="pass" class="form-control form-control-lg" placeholder="Password" required/>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="password" name="pass_confirmation" class="form-control form-control-lg" placeholder="Re-type Password" required/>
                                        @error('pass_confirmation')
                                            <small style="color:red">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="text" name="toko" class="form-control form-control-lg" placeholder="Toko"/>
                                        @if ($errors->first("toko"))
                                            <div style='font-size:11px; color: red;'>{{ $errors->first('toko') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-check-inline">
                                        <input class="form-check-input" type="radio" name="rb" value="rbC" id="flexRadioDefault1" checked>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                        Customer
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <input class="form-check-input" type="radio" name="rb" value="rbS" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                        Seller
                                        </label>
                                    </div>
                                    <br><br>
                                    <input class="btn btn-primary btn-lg btn-rounded px-5 text-light" type="submit" name="btnRegister" value="Register">
                                    </div>
                                </form>
                            <div>
                                <p class="mb-0">Don't have an account? <a href="{{ url('/login') }}" class="text-body fw-bold mb-2">Sign Up</a></p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
</div>

@if ($msg != "")
    <script>alert(`{{$msg}}`);</script>
@endif
@endsection

@section('footer')
<footer class="bg-dark text-center text-white">
    <div class="container p-5 pb-0">
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2021 Copyright:
      <a class="text-white" href="{{url('/home')}}">PT MyItem</a>
    </div>
  </footer>
@endsection

