@extends('index')

@section('content')
<div class="card shadow-lg mx-4 card-profile-bottom">
    <div class="card-body p-3">
      <div class="row gx-4">
        <h5>{{$keuntungan->datadesa->nama_desa}}</h5>
        <h5>{{$keuntungan->penguatan_modal}}</h5>
        <div class="row">
            <div class="col-lg-3 col-6 text-center">
              <div class="border-dashed border-1 border-secondary border-radius-md py-3">
                <h6 class="text-primary text-gradient mb-0">Penasihat</h6>
                <h4 class="font-weight-bolder"><span class="small">{{$keuntungan->penasihat}}</span></h4>
              </div>
            </div>
            <div class="col-lg-3 col-6 text-center">
              <div class="border-dashed border-1 border-secondary border-radius-md py-3">
                <h6 class="text-primary text-gradient mb-0">Pengawas</h6>
                <h4 class="font-weight-bolder"><span class="small">{{$keuntungan->pengawas}}</span></h4>
              </div>
            </div>
            <div class="col-lg-3 col-6 text-center mt-4 mt-lg-0">
              <div class="border-dashed border-1 border-secondary border-radius-md py-3">
                <h6 class="text-primary text-gradient mb-0">Pelaksana Operasional</h6>
                <h4 class="font-weight-bolder"><span class="small">{{$keuntungan->pelaksana}}</span></h4>
              </div>
            </div>
            <div class="col-lg-3 col-6 text-center mt-4 mt-lg-0">
                <div class="border-dashed border-1 border-secondary border-radius-md py-3">
                  <h6 class="text-primary text-gradient mb-0">Anggota</h6>
                  <h4 class="font-weight-bolder"><span class="small">{{$keuntungan->anggota}}</span></h4>
                </div>
              </div>
          </div>
      </div>
    </div>
  </div>
@stop