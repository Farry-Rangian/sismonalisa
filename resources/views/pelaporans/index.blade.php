
@extends('index')

@section('content')
<div class="content-body">
  <div class="container-fluid">
      <!-- row -->
      <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-header">
                      <h4 class="card-title">Pelaporan</h4>
                      @if (Auth::user()->role == 'user')
                      <button type="button" class="btn btn-rounded btn-primary">
                          <a href="{{route('pelaporan.create')}}" style="color: white;"><span class="btn-icon-start text-primary"><i class="fa fa-plus"></i></span>Tambah Data</a>
                      </button>
                      @endif
                      
                  </div>
                  <div class="card-body">
                      <div class="table-responsive">
                          <table id="exampler" class="display" style="min-width: 845px">
                              <thead>
                                  <tr>
                                    <th>Bulan</th>
                                    <th>Laporan Semester</th>
                                    <th>Proposal</th>
                                    <th>Kwitansi</th>
                                    <th>Dokumentasi</th>
                                    <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @forelse ($pelaporans as $pelaporan)
                                  @php
                                    $bulan = date('n', strtotime($pelaporan->tanggal));
                                  @endphp
                                  @if ($bulan >= 1 && $bulan <= 6)
                                  <tr>
                                    <td>
                                      {{ date('F', strtotime($pelaporan->tanggal)) }}
                                    </td>
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
                                      <td>
                                          <div class="d-flex">
                                              {{-- <a href="{{ route('pelaporan.show', $pelaporan->id) }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-eye"></i></a> --}}
                                              @if (Auth::user()->role == 'user')
                                              <a href="{{ route('pelaporan.edit', $pelaporan->id) }}" class="btn btn-success shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                              @endif
                                              
                                              <form action="{{ route('pelaporan.destroy', $pelaporan->id) }}" method="POST">
                                                  @csrf
                                                  @method('DELETE')
                                                  <button type="submit" class="btn btn-danger shadow btn-xs sharp" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i></button>
                                              </form>
                                          </div>												
                                      </td>												
                                  </tr>
                                  @else
                                  <tr>
                                    <td>
                                      {{ date('F', strtotime($pelaporan->tanggal)) }}
                                    </td>
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
                                      <td>
                                          <div class="d-flex">
                                              @if (Auth::user()->role == 'user')
                                              <a href="{{ route('pelaporan.edit', $pelaporan->id) }}" class="btn btn-success shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                              @endif
                                              
                                              <form action="{{ route('pelaporan.destroy', $pelaporan->id) }}" method="POST">
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
                                      Data Pelaporan belum tersedia.
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