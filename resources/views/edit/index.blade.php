<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Update EAS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/vertical-layout-light/style.css')}}">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        @include('layouts.navigation')
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{ asset('img/eas-logo.png') }}" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">{{ Auth::user()->name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">

                            <!-- profile bawaan breeze -->
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- logout bawaan breeze -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>

                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Tambah Etalase Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-left rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Selamat Datang di Form E - Art Storefront</h6>
                    </div>
                    <br>

                    <div>
                        <div>
                            <form class="forms-sample" action="{{ route('update', ['id'=>$data->id]) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputNamaKarya" class="float-start mb-2">Nama Karya</label>
                                    <input type="text" class="form-control mb-3" id="nama_karya" name="nama_karya" value="{{ $data->nama_karya }}" for="nama_karya" placeholder="Inputkan Nama Karya">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputNamaKreator" class="float-start mb-2">Nama Kreator</label>
                                    <input type="text" class="form-control mb-3" id="nama_kreator" name="nama_kreator" value="{{ $data->nama_kreator }}" for="nama_kreator" placeholder="Inputkan Nama Kreator">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputHargaKarya" class="float-start mb-2">Harga Karya</label>
                                    <input type="text" class="form-control" id="harga_karya" name="harga_karya" for="harga_karya" value="{{ $data->harga_karya }}" placeholder="Inputkan Harga Karya">
                                </div>
                                <br>
                                <label for="" class="mb-2 text-left" class="float-start mb-2">Deskripsi Karya</label>
                                <div class=" form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="deskripsi_karya" name="deskripsi_karya" for="deskripsi_karya" style="height: 150px;">{{ $data->deskripsi_karya }}</textarea>
                                    <label for="floatingTextarea">Masukkan Deskripsi Karya Anda</label>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tambah Etalase End -->

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->

        </div>
        <!-- Content End -->

    </div>




    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/chart/chart.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>
