@extends('index')

@section('content')
<div class="card shadow-lg mx-4 ">
    <div class="card-body">
        <form action="{{ route('keuntungans.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Desa</label>
                <input type="number" class="form-control" name="datadesa_id" value="{{ $datadesa_id }}" readonly>
                <!-- error message untuk datadesa_id -->
                @error('datadesa_id')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Penguatan Modal</label>
                <input type="text" class="form-control @error('penguatan_modal') is-invalid @enderror" name="penguatan_modal" value="{{ old('penguatan_modal') }}">
                <!-- error message untuk penguatan_modal -->
                @error('penguatan_modal')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Penasihat</label>
                <input type="text" class="form-control @error('penasihat') is-invalid @enderror" name="penasihat" value="{{ old('penasihat') }}">
                <!-- error message untuk penasihat -->
                @error('penasihat')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Pengawas</label>
                <input type="text" class="form-control @error('pengawas') is-invalid @enderror" name="pengawas" value="{{ old('pengawas') }}">
                <!-- error message untuk pengawas -->
                @error('pengawas')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Pelaksana</label>
                <input type="text" class="form-control @error('pelaksana') is-invalid @enderror" name="pelaksana" value="{{ old('pelaksana') }}">
                <!-- error message untuk pelaksana -->
                @error('pelaksana')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Anggota</label>
                <input type="text" class="form-control @error('anggota') is-invalid @enderror" name="anggota" value="{{ old('anggota') }}">
                <!-- error message untuk anggota -->
                @error('anggota')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="example-date-input" class="form-control-label">Tanggal</label>
                <input class="form-control" type="date" name="tanggal" id="example-date-input">
            </div>
            <button type="submit" class="btn btn-info">Tambah</button>
        </form>
    </div>
  </div>


@stop