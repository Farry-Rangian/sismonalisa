@extends('index')

@section('content')
<div class="card shadow-lg mx-4 ">
    <div class="card-body">
        <form action="{{ route('pelaporans.update', $pelaporan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
             @method('PUT')
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Laporan Semester</label>
                <select name="laporan_semester" class="form-control form-control-sm">
                    <option value="0" @if(old('laporan_semester', $pelaporan->laporan_semester) == 0) selected @endif>Tidak</option>
                    <option value="1" @if(old('laporan_semester', $pelaporan->laporan_semester) == 1) selected @endif>Ya</option>
                </select>
                <!-- error message untuk modal -->
                @error('laporan_semester')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Proposal</label>
                <select name="proposal" class="form-control form-control-sm">
                    <option value="0" @if(old('proposal', $pelaporan->proposal) == 0) selected @endif>Tidak</option>
                    <option value="1" @if(old('proposal', $pelaporan->proposal) == 1) selected @endif>Ya</option>
                </select>
                <!-- error message untuk modal -->
                @error('proposal')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">kwitansi</label>
                <select name="kwitansi" class="form-control form-control-sm">
                    <option value="0" @if(old('kwitansi', $pelaporan->kwitansi) == 0) selected @endif>Tidak</option>
                    <option value="1" @if(old('kwitansi', $pelaporan->kwitansi) == 1) selected @endif>Ya</option>
                </select>
                <!-- error message untuk modal -->
                @error('kwitansi')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Dokumentasi</label>
                <select name="dokumentasi" class="form-control form-control-sm">
                    <option value="0" @if(old('dokumentasi', $pelaporan->dokumentasi) == 0) selected @endif>Tidak</option>
                    <option value="1" @if(old('dokumentasi', $pelaporan->dokumentasi) == 1) selected @endif>Ya</option>
                </select>
                <!-- error message untuk modal -->
                @error('dokumentasi')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="example-date-input" class="form-control-label">Tanggal</label>
                <input class="form-control" type="date" name="tanggal" value="{{ old('tanggal', $pelaporan->tanggal) }}" id="example-date-input">
            </div>
            <button type="submit" class="btn btn-info">Update</button>
        </form>
    </div>
  </div>


@stop