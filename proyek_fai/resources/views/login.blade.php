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
                                <h1 class="fw-bold mb-5">Welcome</h1>
                                <i class="fas fa-user-astronaut fa-3x my-5"></i>
                                <div class="form-outline mb-4">
                                    <input type="email" name="username" class="form-control form-control-lg" placeholder="Email / Username"/>
                                </div>
                                <div class="form-outline mb-5">
                                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Password"/>
                                </div>
                                <button class="btn btn-primary btn-lg btn-rounded px-5 text-light" type="submit">Login</button>
                            </div>
                            <div>
                                <p class="mb-0">Don't have an account? <a href="{{url('/register')}}" class="text-body fw-bold mb-2" name="btnLogin">Login</a></p>
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
<footer class="bg-dark text-center text-white">
    <div class="container p-5 pb-0">
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2021 Copyright:
      <a class="text-white" href="{{url('/home')}}">PT MyItem</a>
    </div>
  </footer>
@endsection