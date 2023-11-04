
@extends('index')

@section('content')

<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h4>Data Realisasi Anggaran</h4>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Usaha</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Modal</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Uang Masuk</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Uang Keluar</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Keuntungan</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                </tr>
              </thead>
              <tbody>

                @forelse ($anggarans as $anggaran)
                    
                <tr>
                    <td>
                      {{$anggaran->jenis_usaha}}
                    </td>
                    <td>
                      Rp.{{$anggaran->modal}}
                    </td>
                    <td>
                      Rp.{{$anggaran->uang_masuk}}
                    </td>
                    <td>
                      Rp.{{$anggaran->uang_keluar}}
                    </td>
                    <td>
                      Rp.{{$anggaran->keuntungan}}
                    </td>
                    <td class="align-middle">
                      <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        Edit
                      </a>
                    </td>
                </tr>
                
                @empty
                <div class="alert alert-danger" role="alert">
                    Data Realisasi Anggaran belum Tersedia
                </div>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

@stop