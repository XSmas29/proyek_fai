<div class="container-fluid h-88">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="{{url('/seller')}}" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                        <ul class="collapse flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li>
                                <a href="{{url('/seller/order/?status=all')}}" class="nav-link px-0"> <span class="d-none d-sm-inline">All</span></a>
                            </li>
                            <li>
                                <a href="{{url('/seller/order/?status=pending')}}" class="nav-link px-0"> <span class="d-none d-sm-inline">Pending</span></a>
                            </li>
                            <li>
                                <a href="{{url('/seller/order/?status=processed')}}" class="nav-link px-0"> <span class="d-none d-sm-inline">Processed</span></a>
                            </li>
                            <li>
                                <a href="{{url('/seller/order/?status=completed')}}" class="nav-link px-0"> <span class="d-none d-sm-inline">Completed</span></a>
                            </li>
                            <li>
                                <a href="{{url('/seller/order/?status=rejected')}}" class="nav-link px-0"> <span class="d-none d-sm-inline">Rejected</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                            <ul class="collapse flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="{{url('/seller/product/list')}}" class="nav-link px-0"> <span class="d-none d-sm-inline">Product List</span></a>
                            </li>
                            <li>
                                <a href="{{url('/seller/product/add')}}" class="nav-link px-0"> <span class="d-none d-sm-inline">Add Product</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-wallet2"></i> <span class="ms-1 d-none d-sm-inline">My Wallet</span> </a>
                    </li>
                    <div class="dropdown pt-5">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('/profile/default.jpg')}}" alt="hugenerd" width="45" height="45" class="rounded-circle">
                            <span class="d-none d-sm-inline ms-3 me-2"><?= session()->get("login")->username?></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow py-0" style="border-radius: 8px 8px 8px 8px">
                            <li class=""><a class="dropdown-item pt-2" style="border-radius: 8px 8px 0 0" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider my-0">
                            </li>
                            <li class="bg-danger" style="border-radius: 0 0 8px 8px"><a class="dropdown-item pb-2" style="border-radius: 0 0 8px 8px;" href="{{url('/login')}}">Sign out</a></li>
                        </ul>
                    </div>
                </ul>
                <hr>
            </div>
        </div>

