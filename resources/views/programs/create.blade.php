@extends('index')

@section('content')
<div class="card shadow-lg mx-4 ">
    <div class="card-body">
        <form action="{{ route('programs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Unit Usaha</label>
                <input type="text" class="form-control @error('usaha') is-invalid @enderror" name="usaha" value="{{ old('usaha') }}" placeholder="Unit Usaha">
                <!-- error message untuk usaha -->
                @error('usaha')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
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
                <label for="example-text-input" class="form-control-label">Penyewaan</label>
                <select name="penyewaan" class="form-control form-control-sm">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>
                <!-- error message untuk modal -->
                @error('penyewaan')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Berjalan</label>
                <select name="berjalan" class="form-control form-control-sm">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>   
                </select>
                <!-- error message untuk modal -->
                @error('berjalan')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Penjualan</label>
                <select name="penjualan" class="form-control form-control-sm">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>
                <!-- error message untuk modal -->
                @error('penjualan')
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