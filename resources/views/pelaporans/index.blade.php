
@extends('index')

@section('content')
<div class="card shadow-lg mx-4">
  <div class="card-body">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h4>Data Pelaporan</h4>
          </div>
          <div class="col-md-4">
            <!-- Button trigger modal -->
            <a href="pelaporans/create" class="btn bg-gradient-success" role="button" aria-pressed="true">
              Tambah Data
            </a>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Laporan Semester</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Proposal</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kwitansi</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Dokumentasi</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
  
                  @forelse ($pelaporans as $pelaporan)
                      
                  <tr>
                      <td>
                        @if ($pelaporan->laporan_semester == 1)
                        Ya
                        @else
                        Tidak
                        @endif
                      </td>
                      <td>
                        @if ($pelaporan->proposal == 1)
                        Ya
                        @else
                        Tidak
                        @endif
                      </td>
                      <td>
                        @if ($pelaporan->kwitansi == 1)
                        Ya
                        @else
                        Tidak
                        @endif
                      </td>
                      <td>
                        @if ($pelaporan->dokumentasi == 1)
                        Ya
                        @else
                        Tidak
                        @endif
                      </td>
                      <td class="align-middle">
                        <a href="{{ route('pelaporans.show', $pelaporan->id) }}" class="btn bg-gradient-secondary" role="button" aria-pressed="true">
                          Lihat
                        </a>
                        <a href="{{ route('pelaporans.edit', $pelaporan->id) }}" class="btn bg-gradient-info" role="button" aria-pressed="true">
                          Edit
                        </a>
                        <form action="{{ route('pelaporans.destroy', $pelaporan->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn bg-gradient-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>

                      </td>
                  </tr>
                  
                  @empty
                  <div class="alert alert-danger" role="alert">
                      Data Pelaporan belum Tersedia
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