@extends('index')

@section('content')
<div class="card shadow-lg mx-4 ">
    <div class="card-body">
        <form action="{{ route('programs.update', $program->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
             @method('PUT')
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Unit Usaha</label>
                <input type="text" class="form-control @error('usaha') is-invalid @enderror" name="usaha" value="{{ old('usaha', $program->usaha) }}" placeholder="Unit Usaha">
                <!-- error message untuk usaha -->
                @error('usaha')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Penyewaan</label>
                <select name="penyewaan" class="form-control form-control-sm">
                    <option value="0" @if(old('penyewaan', $program->penyewaan) == 0) selected @endif>Tidak</option>
                    <option value="1" @if(old('penyewaan', $program->penyewaan) == 1) selected @endif>Ya</option>
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
                    <option value="0" @if(old('berjalan', $program->berjalan) == 0) selected @endif>Tidak</option>
                    <option value="1" @if(old('berjalan', $program->berjalan) == 1) selected @endif>Ya</option>   
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
                    <option value="0" @if(old('penjualan', $program->penjualan) == 0) selected @endif>Tidak</option>
                    <option value="1" @if(old('penjualan', $program->penjualan) == 1) selected @endif>Ya</option>
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
                <input class="form-control" type="date" name="tanggal" value="{{ old('tanggal', $program->tanggal) }}" id="example-date-input">
            </div>
            <button type="submit" class="btn btn-info">Update</button>
        </form>
    </div>
  </div>


@stop