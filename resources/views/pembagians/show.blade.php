@extends('index')

@section('content')
<div class="card shadow-lg mx-4 card-profile-bottom">
    <div class="card-body p-3">
      <div class="row gx-4">
        <h5>{{$pembagian->tujuan}}</h5>
        <div class="row">
            <div class="col-lg-3 col-6 text-center">
              <div class="border-dashed border-1 border-secondary border-radius-md py-3">
                <h6 class="text-primary text-gradient mb-0">Jumlah</h6>
                <h4 class="font-weight-bolder"><span class="small">Rp. {{$pembagian->jumlah}}</span></h4>
              </div>
            </div>
            <div class="col-lg-3 col-6 text-center">
              <div class="border-dashed border-1 border-secondary border-radius-md py-3">
                <h6 class="text-primary text-gradient mb-0">Persentase</h6>
                <h4 class="font-weight-bolder"><span class="small">{{$pembagian->persen}}%</span></h4>
              </div>
            </div>
            <div class="col-lg-3 col-6 text-center mt-4 mt-lg-0">
              <div class="border-dashed border-1 border-secondary border-radius-md py-3">
                <h6 class="text-primary text-gradient mb-0">Uraian</h6>
                <h4 class="font-weight-bolder"><span class="small">Rp. {{$pembagian->uraian}}</span></h4>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
@stop