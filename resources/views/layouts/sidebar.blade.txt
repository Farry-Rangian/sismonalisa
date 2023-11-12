<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="card">
      <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
          <img src="{{ asset('img/sismonalisa.png')}}" class="navbar-brand-img h-100" alt="main_logo">
          <span class="ms-1 font-weight-bold">SISMONALISA</span>
        </a>
      </div>
    
      <hr class="horizontal dark mt-0">
      <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="{{Auth::user()->role}}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Dashboard</span>
            </a>
          </li>
          @if (Auth::user()->role == 'admin')
          <li class="nav-item">
            <a class="nav-link " href="{{ route('datadesas.index') }}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Data Desa</span>
            </a>
          </li>
          @endif
          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Pengawasan Rutin</h6>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ route('programs.index') }}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Realisasi Program</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ route('anggarans.index') }}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Realisasi Anggaran</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ route('keuntungans.index') }}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-collection text-info text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Pemanfaatan Keuntungan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ route('pelaporans.index') }}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-collection text-info text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Pelaporan</span>
            </a>
          </li>
          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Pengawasan Tahunan</h6>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ route('pembagians.index') }}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Pembagian Laba Tahunan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ route('kesimpulans.index') }}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-collection text-info text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Kesimpulan Tahunan</span>
            </a>
          </li>
          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Pengawasan Insidentil</h6>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ route('pengawasans.index') }}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-collection text-info text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Pengawasan Insidentil</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </aside>