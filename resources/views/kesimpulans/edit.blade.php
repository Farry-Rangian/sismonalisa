@extends('index')

@section('content')
<div class="card shadow-lg mx-4 ">
    <div class="card-body">
        <form action="{{ route('kesimpulans.update',$kesimpulan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Kesimpulan Program</label>
                <select name="program" class="form-control form-control-sm">
                    <option value="0" @if(old('program', $kesimpulan->program) == 0) selected @endif>Tidak</option>
                    <option value="1" @if(old('program', $kesimpulan->program) == 1) selected @endif>Ya</option>
                </select>
                <!-- error message untuk modal -->
                @error('program')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Kesimpulan Anggaran</label>
                <select name="anggaran" class="form-control form-control-sm">
                    <option value="0" @if(old('anggaran', $kesimpulan->anggaran) == 0) selected @endif>Tidak</option>
                    <option value="1" @if(old('anggaran', $kesimpulan->anggaran) == 1) selected @endif>Ya</option>
                </select>
                <!-- error message untuk modal -->
                @error('anggaran')
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