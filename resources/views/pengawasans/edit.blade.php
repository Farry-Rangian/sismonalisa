@extends('index')

@section('content')
<div class="card shadow-lg mx-4 ">
    <div class="card-body">
        <form action="{{ route('pengawasans.update', $pengawasan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Objek Masalah</label>
                <input type="text" class="form-control @error('objek') is-invalid @enderror" name="objek" value="{{ old('objek', $pengawasan->objek) }}">
                <!-- error message untuk objek -->
                @error('objek')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Hasil Penyelidikan</label>
                <input type="text" class="form-control @error('hasil') is-invalid @enderror" name="hasil" value="{{ old('hasil', $pengawasan->hasil) }}">
                <!-- error message untuk hasil -->
                @error('hasil')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Tindak Lanjut</label>
                <input type="text" class="form-control @error('tindak') is-invalid @enderror" name="tindak" value="{{ old('tindak', $pengawasan->tindak) }}">
                <!-- error message untuk tindak -->
                @error('tindak')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-info">Update</button>
        </form>
    </div>
  </div>


@stop