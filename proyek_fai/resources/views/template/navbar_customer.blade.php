<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <!-- Container wrapper -->
    <div class="container-fluid">
    <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0" href="{{url('/customer')}}">
                <img src="{{asset('logo-text.png')}}" height="24"/>
            </a>
            <!-- Left links -->
            <ul class="navbar-nav mb-2 mb-md-0" style="width:100%">
                <li class="nav-item" style="margin: auto">
                    <form type="post" class="my-0 mx-5 input-group">
                        @csrf
                        <input type="search" class="form-control rounded" placeholder="Search" aria-describedby="search-addon"/>
                        <button type="submit" class="mx-2 text-white border-0 bg-transparent" id="search-addon">
                            <i class="bi-search"></i>
                        </button>
                    </form>
                </li>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-flex align-items-center">
            <!-- Icon -->
            <button class="btn position-relative text-white p-0 me-4 m-0" href="#">
                <i class="fas bi-cart" style="font-size: 1.5em"></i>
                <small>
                    <span class="position-absolute top-25 start-100 translate-middle badge rounded-pill bg-danger ms-1" style="padding: 4px 5px 4px 5px"><?= count(json_decode(session()->get("datacart") ?? '[]')) ?></span>
                </small>
            </button>

            <!-- wishlist -->
            <button class="btn position-relative p-0 me-5 m-0" href="#" role="button">
                <i class="fas bi-heart text-white" style="font-size: 1.5em"></i>
                <small>
                    <span id="countwishlist" class="position-absolute top-25 start-100 translate-middle badge rounded-pill bg-danger ms-1" style="padding: 4px 5px 4px 5px"><?= $countwishlist ?></span>
                </small>
            </button>
            <!-- Avatar -->
            <div class="dropdown me-5">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('/profile/default.jpg')}}" alt="hugenerd" width="45" height="45" class="rounded-circle">
                    <span class="d-none d-sm-inline ms-3 me-2"><?= session()->get("login")->username?></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow py-0" style="border-radius: 8px 8px 8px 8px">
                    <li class="">
                        <a class="dropdown-item pt-2" style="border-radius: 8px 8px 0 0" href="#">Profile</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider my-0">
                    </li>
                    <li class="bg-danger" style="border-radius: 0 0 8px 8px"><a class="dropdown-item pb-2" style="border-radius: 0 0 8px 8px;" href="{{url('/login')}}">Sign out</a></li>
                </ul>
            </div>
        </div>
        <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->
