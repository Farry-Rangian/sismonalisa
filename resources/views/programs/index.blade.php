
@extends('index')

@section('content')
<div class="card shadow-lg mx-4">
  <div class="card-body">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h4>Data Realisasi Program Semester</h4>
            <a href="programs/create" class="btn bg-gradient-success" role="button" aria-pressed="true">
              Tambah Data
            </a>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Desa</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Bulan</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Unit Usaha</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Penyewaan</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Berjalan</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Penjualan</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
  
                  @forelse ($programs as $program)
                    @php
                      $bulan = date('n', strtotime($program->tanggal));
                    @endphp
                  
                    @if ($bulan >= 7 && $bulan <= 12)
                      <tr>
                        <td>
                          {{ $program->datadesa->nama_desa }}
                        </td>
                        <td>
                          {{ date('F', strtotime($program->tanggal)) }}
                        </td> 
                        <td>
                          {{ $program->usaha }}
                        </td>                       
                        <td>
                          @if ($program->penyewaan == 1)
                            Ya
                          @else
                            Tidak
                          @endif
                        </td>
                        <td>
                          @if ($program->berjalan == 1)
                            Ya
                          @else
                            Tidak
                          @endif
                        </td>
                        <td>
                          @if ($program->penjualan == 1)
                            Ya
                          @else
                            Tidak
                          @endif
                        </td>
                        <td class="align-middle">
                          <a href="{{ route('programs.show', $program->id) }}" class="btn bg-gradient-secondary" role="button" aria-pressed="true">
                            Lihat
                          </a>
                          <a href="{{ route('programs.edit', $program->id) }}" class="btn bg-gradient-info" role="button" aria-pressed="true">
                            Edit
                          </a>
                          <form action="{{ route('programs.destroy', $program->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn bg-gradient-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
                          </form>
                        </td>
                      </tr>
                    @endif
                    
                  @empty
                    <div class="alert alert-danger" role="alert">
                      Data Realisasi Program untuk bulan Juli sampai Desember belum Tersedia
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