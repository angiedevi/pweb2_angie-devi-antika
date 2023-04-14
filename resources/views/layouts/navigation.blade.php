<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>EAS</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('img/eas-logo.png') }}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">

                <!-- biar nama identitasnya yang di top bar sesuai sama yang diinputin pas login -->
                <h6 class="mb-0">{{ Auth::user()->name }}</h6>

                <!-- nama keterangkan level/rolenya sesuai loginnya jadi siapa -->
                <span>{{ Auth::user()->level }}</span> 
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="/dashboard" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
        

            <!-- multiuser -->
            @if(auth()->user()->level == "creator") 
            <a href="/etalase/create" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Tambah Etalase</a>
            <a href="/etalase/edit" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Kelola Etalase</a>
            @endif

            <a href="/etalase" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Lihat Etalase</a>
            
        </div>
    </nav>
</div>