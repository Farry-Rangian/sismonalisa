@extends('index')

@section('content')
<div class="card shadow-lg mx-4 ">
    <div class="card-body">
        <form action="{{ route('pembagians.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Tujuan</label>
                <input type="text" class="form-control @error('tujuan') is-invalid @enderror" name="tujuan" value="{{ old('tujuan') }}">
                <!-- error message untuk tujuan -->
                @error('tujuan')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Jumlah</label>
                <input type="number" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah" value="{{ old('jumlah') }}" placeholder="Masukkan angka">
                <!-- error message untuk jumlah -->
                @error('jumlah')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Persentase</label>
                <input type="number" class="form-control @error('persen') is-invalid @enderror" name="persen" value="{{ old('persen') }}" placeholder="Masukkan angka">
                <!-- error message untuk persen -->
                @error('persen')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Uraian</label>
                <input type="text" class="form-control @error('uraian') is-invalid @enderror" name="uraian" value="{{ old('uraian') }}">
                <!-- error message untuk uraian -->
                @error('uraian')
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