
@extends('index')

@section('content')
<div class="card shadow-lg mx-4">
  <div class="card-body">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h4>Data Kesimpulan</h4>
            <a href="kesimpulans/create" class="btn bg-gradient-success" role="button" aria-pressed="true">
              Tambah Data
            </a>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kesimpulan Program</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kesimpulan Anggaran</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
  
                  @forelse ($kesimpulans as $kesimpulan)
                      
                  <tr>
                      <td>
                        @if ($kesimpulan->program == 1)
                        Ya
                        @else
                        Tidak
                        @endif
                      </td>
                      <td>
                        @if ($kesimpulan->anggaran == 1)
                        Ya
                        @else
                        Tidak
                        @endif
                      </td>
                      <td class="align-middle">
                        {{-- <a href="{{ route('kesimpulans.show', $kesimpulan->id) }}" class="btn bg-gradient-secondary" role="button" aria-pressed="true">
                          Lihat
                        </a> --}}
                        <a href="{{ route('kesimpulans.edit', $kesimpulan->id) }}" class="btn bg-gradient-info" role="button" aria-pressed="true">
                          Edit
                        </a>
                        <form action="{{ route('kesimpulans.destroy', $kesimpulan->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn bg-gradient-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                      </td>
                  </tr>
                  
                  @empty
                  <div class="alert alert-danger" role="alert">
                      Data kesimpulan belum Tersedia
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