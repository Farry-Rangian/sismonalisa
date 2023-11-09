@extends('index')

@section('content')
<div class="card shadow-lg mx-4 card-profile-bottom">
    <div class="card-body p-3">
      <div class="row gx-4">
        <h5>{{$pelaporan->datadesa->nama_desa}}</h5>
        <div class="row">
            <div class="col-lg-3 col-6 text-center">
              <div class="border-dashed border-1 border-secondary border-radius-md py-3">
                <h6 class="text-primary text-gradient mb-0">Laporan Semester</h6>
                <h4 class="font-weight-bolder">
                    <span class="small">
                        @if ($pelaporan->laporan_semester == 1)
                        Ya
                        @else
                        Tidak
                        @endif
                    </span>
                </h4>
              </div>
            </div>
            <div class="col-lg-3 col-6 text-center">
              <div class="border-dashed border-1 border-secondary border-radius-md py-3">
                <h6 class="text-primary text-gradient mb-0">Proposal</h6>
                <h4 class="font-weight-bolder">
                    <span class="small">
                        @if ($pelaporan->proposal == 1)
                        Ya
                        @else
                        Tidak
                        @endif
                    </span>
                </h4>
              </div>
            </div>
            <div class="col-lg-3 col-6 text-center mt-4 mt-lg-0">
              <div class="border-dashed border-1 border-secondary border-radius-md py-3">
                <h6 class="text-primary text-gradient mb-0">Kwitansi</h6>
                <h4 class="font-weight-bolder">
                    <span class="small">
                        @if ($pelaporan->Kwitansi == 1)
                        Ya
                        @else
                        Tidak
                        @endif
                    </span>
                </h4>
              </div>
            </div>
            <div class="col-lg-3 col-6 text-center mt-4 mt-lg-0">
                <div class="border-dashed border-1 border-secondary border-radius-md py-3">
                  <h6 class="text-primary text-gradient mb-0">Dokumentasi</h6>
                  <h4 class="font-weight-bolder">
                      <span class="small">
                          @if ($pelaporan->dokumentasi == 1)
                          Ya
                          @else
                          Tidak
                          @endif
                      </span>
                  </h4>
                </div>
              </div>
        </div>
    </div>
  </div>
@stop