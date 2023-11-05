@extends('index')

@section('content')
<div class="card shadow-lg mx-4 ">
    <div class="card-body">
        <form action="{{ route('keuntungans.update', $keuntungan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Penguatan Modal</label>
                <input type="text" class="form-control @error('penguatan_modal') is-invalid @enderror" name="penguatan_modal" value="{{ old('penguatan_modal', $keuntungan->penguatan_modal) }}">
                <!-- error message untuk penguatan_modal -->
                @error('penguatan_modal')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Penasihat</label>
                <input type="text" class="form-control @error('penasihat') is-invalid @enderror" name="penasihat" value="{{ old('penasihat', $keuntungan->penasihat) }}">
                <!-- error message untuk penasihat -->
                @error('penasihat')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Pengawas</label>
                <input type="text" class="form-control @error('pengawas') is-invalid @enderror" name="pengawas" value="{{ old('pengawas', $keuntungan->pengawas) }}">
                <!-- error message untuk pengawas -->
                @error('pengawas')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Pelaksana</label>
                <input type="text" class="form-control @error('pelaksana') is-invalid @enderror" name="pelaksana" value="{{ old('pelaksana', $keuntungan->pelaksana) }}">
                <!-- error message untuk pelaksana -->
                @error('pelaksana')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Anggota</label>
                <input type="text" class="form-control @error('anggota') is-invalid @enderror" name="anggota" value="{{ old('anggota', $keuntungan->anggota) }}">
                <!-- error message untuk anggota -->
                @error('anggota')
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