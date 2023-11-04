@extends('index')

@section('content')
<div class="card shadow-lg mx-4 card-profile-bottom">
    <div class="card-body">
        <form action="{{ route('anggarans.update', $anggaran->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
             @method('PUT')
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">jenis_usaha</label>
                <input type="text" class="form-control @error('jenis_usaha') is-invalid @enderror" name="jenis_usaha" value="{{ old('jenis_usaha', $anggaran->jenis_usaha) }}" placeholder="Jenis Usaha">
                <!-- error message untuk jenis_usaha -->
                @error('jenis_usaha')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">modal</label>
                <input type="number" class="form-control @error('modal') is-invalid @enderror" name="modal" value="{{ old('modal', $anggaran->modal) }}" placeholder="Jenis Usaha">
                <!-- error message untuk modal -->
                @error('modal')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">uang_masuk</label>
                <input type="number" class="form-control @error('uang_masuk') is-invalid @enderror" name="uang_masuk" value="{{ old('uang_masuk', $anggaran->uang_masuk) }}" placeholder="Jenis Usaha">
                <!-- error message untuk uang_masuk -->
                @error('uang_masuk')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">uang_keluar</label>
                <input type="number" class="form-control @error('uang_keluar') is-invalid @enderror" name="uang_keluar" value="{{ old('uang_keluar', $anggaran->uang_keluar) }}" placeholder="Jenis Usaha">
                <!-- error message untuk uang_keluar -->
                @error('uang_keluar')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">keuntungan</label>
                <input type="number" class="form-control @error('keuntungan') is-invalid @enderror" name="keuntungan" value="{{ old('keuntungan', $anggaran->keuntungan) }}" placeholder="Jenis Usaha">
                <!-- error message untuk keuntungan -->
                @error('keuntungan')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-info">Edit</button>
        </form>
    </div>
  </div>


@stop