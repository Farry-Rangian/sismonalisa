@extends('index')

@section('content')
<div class="card shadow-lg mx-4 ">
    <div class="card-body">
        <form action="{{ route('kesimpulans.update',$kesimpulan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Kesimpulan Program</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="program" value="{{ old('program', $kesimpulan->program) }}" rows="3"></textarea>
                <!-- error message untuk modal -->
                @error('program')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Kesimpulan Anggaran</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="anggaran" value="{{ old('anggaran', $kesimpulan->anggaran) }}" rows="3"></textarea>
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