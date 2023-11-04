@extends('index')

@section('content')
<div class="card card-frame">
    <div class="card-body">
        <form action="{{ route('anggarans.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Jenis Usaha</label>
                <input type="text" class="form-control @error('jenis_usaha') is-invalid @enderror" name="jenis_usaha" value="{{ old('jenis_usaha') }}" placeholder="Jenis Usaha">
                <!-- error message untuk jenis_usaha -->
                @error('jenis_usaha')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Modal</label>
                <input type="number" class="form-control @error('modal') is-invalid @enderror" name="modal" value="{{ old('modal') }}" placeholder="Masukkan angka">
                <!-- error message untuk modal -->
                @error('modal')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Uang Masuk</label>
                <input type="number" class="form-control @error('uang_masuk') is-invalid @enderror" name="uang_masuk" value="{{ old('uang_masuk') }}" placeholder="Masukkan angka">
                <!-- error message untuk uang_masuk -->
                @error('uang_masuk')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Uang Keluar</label>
                <input type="number" class="form-control @error('uang_keluar') is-invalid @enderror" name="uang_keluar" value="{{ old('uang_keluar') }}" placeholder="Masukkan angka">
                <!-- error message untuk uang_keluar -->
                @error('uang_keluar')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Keuntungan</label>
                <input type="number" class="form-control @error('keuntungan') is-invalid @enderror" name="keuntungan" value="{{ old('keuntungan') }}" placeholder="Masukkan angka">
                <!-- error message untuk keuntungan -->
                @error('keuntungan')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-info">Tambah</button>
        </form>
    </div>
  </div>


@stop