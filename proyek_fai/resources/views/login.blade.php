@extends("template/main")

@section('title')
    MyItem | Login
@endsection

@section("main")
<div class="d-flex align-items-center h-100">

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="text-center mb-5" style="transition: 0.8s ease-in-out"><img  src="{{asset('logo.png')}}" height="200px" width="200px"></div>
                <div class="card" style="border-radius: 1rem; min-width: 400px;">
                    <div class="card-body p-4">
                        <div class="my-md-3 pb-1">
                            <form method="POST">
                                @csrf
                                <h1 class="fw-bold mb-5 text-center">Welcome</h1>
                                <i class="fas fa-user-astronaut fa-3x my-5"></i>
                                @error("username")<small class="text-danger text-left"> ({{ $message }}) </small>@enderror
                                <div class="form-outline mb-4">
                                    <input type="text" name="username" class="form-control form-control-lg" placeholder="Email / Username"/>
                                </div>
                                @error("password")<small class="text-danger text-left"> ({{ $message }}) </small>@enderror
                                <div class="form-outline mb-4">
                                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Password"/>
                                </div>
                                <div class="text-center">
                                    <input class="btn btn-primary btn-lg btn-rounded px-5 text-light" type="submit" value="Login" name="btnLogin">
                                </div>
                            </form>
                        </div>
                            <div class="text-center">
                                <p class="mb-0">Don't have an account? <a href="{{url('/register')}}" class="text-body fw-bold mb-2" >Register</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center bg-danger text-light my-5" <?php echo (session()->get("msg") == '') ? '' : 'style="border-radius: 20px; height: 80px; font-size:18pt; padding-top: 20px"'; ?>>{{session()->get("msg") ?? ""}}</div>
                </div>
            </div>
        </div>
    </div>


@endsection

