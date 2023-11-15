@extends('index')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Desa</h4>
                        <button type="button" class="btn btn-rounded btn-primary">
                            <a href="{{route('anggarans.create')}}" style="color: white;"><span class="btn-icon-start text-primary"><i class="fa fa-plus"></i></span>Tambah Data</a>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="exampler" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Jenis Usaha</th>
                                        <th>Modal</th>
                                        <th>Uang Masuk</th>
                                        <th>Uang Keluar</th>
                                        <th>Keuntungan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($anggarans as $anggaran)
                                    @php
                                      $bulan = date('n', strtotime($anggaran->tanggal));
                                    @endphp
                                    @if ($bulan >= 1 && $bulan <= 6)
                                    <tr>
                                        <td>{{$anggaran->jenis_usaha}}</td>
                                        <td>{{$anggaran->modal}}</td>
                                        <td>{{$anggaran->uang_masuk}}</td>
                                        <td>{{$anggaran->uang_keluar}}</td>
                                        <td>{{$anggaran->keuntungan}}</td>
                                        <td>
                                            <div class="d-flex">
                                                {{-- <a href="{{ route('anggarans.show', $anggaran->id) }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-eye"></i></a> --}}
                                                <a href="{{ route('anggarans.edit', $anggaran->id) }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <form action="{{ route('anggarans.destroy', $anggaran->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger shadow btn-xs sharp" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </div>												
                                        </td>												
                                    </tr>
                                    @else
                                    <tr>
                                        <td>{{$anggaran->jenis_usaha}}</td>
                                        <td>Rp.{{$anggaran->modal}}</td>
                                        <td>Rp.{{$anggaran->uang_masuk}}</td>
                                        <td>Rp.{{$anggaran->uang_keluar}}</td>
                                        <td>Rp.{{$anggaran->keuntungan}}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('anggarans.edit', $anggaran->id) }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <form action="{{ route('anggarans.destroy', $anggaran->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger shadow btn-xs sharp" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </div>												
                                        </td>												
                                    </tr>
                                    @endif
                                    
                                    @empty
                                    <div class="alert alert-danger alert-dismissible fade show">
                                        <svg viewbox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                        Data Realisasi Anggaran belum tersedia.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                        </button>
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