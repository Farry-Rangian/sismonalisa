
@extends('index')

@section('content')
<div class="card shadow-lg mx-4">
  <div class="card-body">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h4>Data Desa</h4>
            {{-- <a href="datadesas/create" class="btn bg-gradient-success" role="button" aria-pressed="true">
                Tambah Data
            </a> --}}
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Desa</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Kecamatan</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Username</th>
                    {{-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th> --}}
                  </tr>
                </thead>
                <tbody>
  
                  @forelse ($datadesas as $datadesa)
                      
                  <tr>
                      <td>
                        {{$datadesa->nama_desa}}
                      </td>
                      <td>
                        {{$datadesa->kecamatan}}
                      </td>
                      <td>
                        {{$datadesa->user->name}}
                      </td>
                      {{-- <td class="align-middle">
                        <a href="{{ route('datadesas.show', $datadesa->id) }}" class="btn bg-gradient-secondary" role="button" aria-pressed="true">
                          Lihat
                        </a>
                        <a href="{{ route('datadesas.edit', $datadesa->id) }}" class="btn bg-gradient-info" role="button" aria-pressed="true">
                          Edit
                        </a>
                        <form action="{{ route('datadesas.destroy', $datadesa->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn bg-gradient-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>

                      </td> --}}
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