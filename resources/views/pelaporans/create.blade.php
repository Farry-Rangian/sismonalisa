@extends('index')

@section('content')
<div class="card shadow-lg mx-4 ">
    <div class="card-body">
        <form action="{{ route('pelaporans.store') }}" method="POST" enctype="multipart/form-data">
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
                <label for="example-text-input" class="form-control-label">Laporan Semester</label>
                <select name="laporan_semester" class="form-control form-control-sm">
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
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
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>   
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
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
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
                    <option value="0">Tidak</option>
                    <option value="1">Ya</option>
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
                <input class="form-control" type="date" name="tanggal" id="example-date-input">
            </div>
            <button type="submit" class="btn btn-info">Tambah</button>
        </form>
    </div>
  </div>


@stop