
@extends('index')

@section('content')
<div class="card shadow-lg mx-4">
  <div class="card-body">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h4>Data Pembagian Laba Tahunan</h4>
            <a href="pembagians/create" class="btn bg-gradient-success" role="button" aria-pressed="true">
                Tambah Data
            </a>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tujuan Laba</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jumlah Rupiah</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Persentase</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Uraian</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
  
                  @forelse ($pembagians as $pembagian)
                      
                  <tr>
                      <td>
                        {{$pembagian->tujuan}}
                      </td>
                      <td>
                        Rp.{{$pembagian->jumlah}}
                      </td>
                      <td>
                        {{$pembagian->persen}}%
                      </td>
                      <td>
                        {{$pembagian->uraian}}
                      </td>
                      <td class="align-middle">
                        <a href="{{ route('pembagians.show', $pembagian->id) }}" class="btn bg-gradient-secondary" role="button" aria-pressed="true">
                          Lihat
                        </a>
                        <a href="{{ route('pembagians.edit', $pembagian->id) }}" class="btn bg-gradient-info" role="button" aria-pressed="true">
                          Edit
                        </a>
                        <form action="{{ route('pembagians.destroy', $pembagian->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn bg-gradient-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>

                      </td>
                  </tr>
                  
                  @empty
                  <div class="alert alert-danger" role="alert">
                      Data Realisasi pembagian belum Tersedia
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