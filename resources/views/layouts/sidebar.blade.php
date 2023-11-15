<!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="" href="javascript:void()" aria-expanded="false">
							<i class="fas fa-home"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                    </li>
                    @if (Auth::user()->role == 'admin')
                    <li><a href="{{route('data-desa.index')}}" class="" aria-expanded="false">
                            <i class="fas fa-user-check"></i>
                            <span class="nav-text">Data Desa</span>
                        </a>
                    </li> 
                    @endif
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
						<i class="fas fa-info-circle"></i>
							<span class="nav-text">Pengawasan Rutin</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Semester</a>
                                <ul aria-expanded="false">
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">1</a>
                                    <ul aria-expanded="false">
                                        <li><a href="{{route('data.semester', ['semester' => 1])}}">Realisasi Anggaran</a></li>
                                        <li><a href="{{route('program.semester', ['semester' => 1])}}">Realisasi Program</a></li>
                                        <li><a href="{{route('keuntungan.semester', ['semester' => 1])}}">Pemanfaatan Keuntungan</a></li>
                                        <li><a href="{{route('pelaporan.semester', ['semester' => 1])}}">Pelaporan</a></li>
                                    </ul>
                                    </li>
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">2</a>
                                        <ul aria-expanded="false">
                                            <li><a href="{{route('data.semester', ['semester' => 2])}}">Realisasi Anggaran</a></li>
                                            <li><a href="{{route('program.semester', ['semester' => 2])}}">Realisasi Program</a></li>
                                            <li><a href="{{route('keuntungan.semester', ['semester' => 2])}}">Pemanfaatan Keuntungan</a></li>
                                            <li><a href="{{route('pelaporan.semester', ['semester' => 2])}}">Pelaporan</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
							<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Tahunan</a>
                                <ul aria-expanded="false">
                                    <li><a href="{{route('pembagian-laba.index')}}">Pembagian Laba Tahunan</a></li>
									<li><a href="{{route('kesimpulan.index')}}">Kesimpulan Tahunan</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="" href="{{route('pengawasan-insidentil.index')}}" aria-expanded="false">
							<i class="fas fa-chart-line"></i>
							<span class="nav-text">Pengawasan Insidentil</span>
						</a>
                    </li>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->