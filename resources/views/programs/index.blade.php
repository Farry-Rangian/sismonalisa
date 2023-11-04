
@extends('index')

@section('content')
<div class="card shadow-lg mx-4 card-profile-bottom">
  <div class="card-body">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h4>Data Realisasi Program</h4>
          </div>
          <div class="col-md-4">
            <!-- Button trigger modal -->
            <a href="anggarans/create" class="btn bg-gradient-success" role="button" aria-pressed="true">
              Tambah Data
            </a>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Unit Usaha</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Penyewaan</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Berjalan</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Penjualan</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
  
                  @forelse ($programs as $program)
                      
                  <tr>
                      <td>
                        {{$program->unit_usaha}}
                      </td>
                      <td>
                        {{$program->penyewaan}}
                      </td>
                      <td>
                        {{$program->berjalan}}
                      </td>
                      <td>
                        {{$program->penjualan}}
                      </td>
                      <td>
                        {{$anggaran->keuntungan}}
                      </td>
                      <td class="align-middle">
                        <a href="{{ route('anggarans.show', $anggaran->id) }}" class="btn bg-gradient-secondary" role="button" aria-pressed="true">
                          Lihat
                        </a>
                        <a href="{{ route('anggarans.edit', $anggaran->id) }}" class="btn bg-gradient-info" role="button" aria-pressed="true">
                          Edit
                        </a>

                        {{-- <a href="{{ route('anggarans.show', $anggaran->id) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          view
                        </a> --}}
                        {{-- <a href="{{ route('anggarans.edit', $anggaran->id) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          edit
                        </a> --}}
                        <form action="{{ route('anggarans.destroy', $anggaran->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn bg-gradient-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>

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
  </div>
</div>

@stop