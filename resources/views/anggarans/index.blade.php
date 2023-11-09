
@extends('index')

@section('content')
<div class="card shadow-lg mx-4">
  <div class="card-body">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h4>Data Realisasi Anggaran Semester 1</h4>
            <a href="anggarans/create" class="btn bg-gradient-success" role="button" aria-pressed="true">
              Tambah Data
            </a>
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
                    @php
                      $bulan = date('n', strtotime($anggaran->tanggal));
                    @endphp
                  
                    @if ($bulan >= 1 && $bulan <= 6)
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
                        <a href="{{ route('anggarans.show', $anggaran->id) }}" class="btn bg-gradient-secondary" role="button" aria-pressed="true">
                          Lihat
                        </a>
                        <a href="{{ route('anggarans.edit', $anggaran->id) }}" class="btn bg-gradient-info" role="button" aria-pressed="true">
                          Edit
                        </a>
                        <form action="{{ route('anggarans.destroy', $anggaran->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn bg-gradient-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                      </td>
                    </tr>
                    @endif
                  
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
  </div>

  <div class="card-body">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h4>Data Realisasi Anggaran Semester 2</h4>
            <a href="anggarans/create" class="btn bg-gradient-success" role="button" aria-pressed="true">
              Tambah Data
            </a>
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
                    @php
                      $bulan = date('n', strtotime($anggaran->tanggal));
                    @endphp
                  
                    @if ($bulan >= 7 && $bulan <= 12)
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
                        <a href="{{ route('anggarans.show', $anggaran->id) }}" class="btn bg-gradient-secondary" role="button" aria-pressed="true">
                          Lihat
                        </a>
                        <a href="{{ route('anggarans.edit', $anggaran->id) }}" class="btn bg-gradient-info" role="button" aria-pressed="true">
                          Edit
                        </a>
                        <form action="{{ route('anggarans.destroy', $anggaran->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn bg-gradient-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                      </td>
                    </tr>
                    @endif
                  
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
  </div>
</div>

@stop