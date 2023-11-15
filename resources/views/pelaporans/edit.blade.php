@extends('index')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Pelaporan</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('pelaporan.update', $pelaporan->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">laporan_semester</label>
                                    <div class="col-sm-9">
                                        <select name="laporan_semester" class="default-select form-control wide mb-3">
											<option value="0"value="0" @if(old('laporan_semester', $pelaporan->laporan_semester) == 0) selected @endif>Tidak</option>
											<option value="1"value="0" @if(old('laporan_semester', $pelaporan->laporan_semester) == 1) selected @endif>Ya</option>
										</select>
                                    </div>
                                    @error('laporan_semester')
                                    <div class="alert alert-danger alert-dismissible fade show">
                                        <svg viewbox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                        {{$message}}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                        </button>
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">proposal</label>
                                    <div class="col-sm-9">
                                        <select name="proposal" class="default-select form-control wide mb-3">
											<option value="0" @if(old('proposal', $pelaporan->proposal) == 0) selected @endif>Tidak</option>
											<option value="1" @if(old('proposal', $pelaporan->proposal) == 1) selected @endif>Ya</option>
										</select>
                                    </div>
                                    @error('proposal')
                                    <div class="alert alert-danger alert-dismissible fade show">
                                        <svg viewbox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                        {{$message}}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                        </button>
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">kwitansi</label>
                                    <div class="col-sm-9">
                                        <select name="kwitansi" class="default-select form-control wide mb-3">
											<option value="0" @if(old('kwitansi', $pelaporan->kwitansi) == 0) selected @endif>Tidak</option>
											<option value="1" @if(old('kwitansi', $pelaporan->kwitansi) == 1) selected @endif>Ya</option>
										</select>
                                    </div>
                                    @error('kwitansi')
                                    <div class="alert alert-danger alert-dismissible fade show">
                                        <svg viewbox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                        {{$message}}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                        </button>
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">dokumentasi</label>
                                    <div class="col-sm-9">
                                        <select name="dokumentasi" class="default-select form-control wide mb-3">
											<option value="0" @if(old('dokumentasi', $pelaporan->dokumentasi) == 0) selected @endif>Tidak</option>
											<option value="1" @if(old('dokumentasi', $pelaporan->dokumentasi) == 1) selected @endif>Ya</option>
										</select>
                                    </div>
                                    @error('dokumentasi')
                                    <div class="alert alert-danger alert-dismissible fade show">
                                        <svg viewbox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                        {{$message}}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                        </button>
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">tanggal</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" name="tanggal" placeholder="tanggal" value="{{ old('tanggal', $pelaporan->tanggal) }}">
                                    </div>
                                    @error('tanggal')
                                    <div class="alert alert-danger alert-dismissible fade show">
                                        <svg viewbox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                        {{$message}}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                        </button>
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop