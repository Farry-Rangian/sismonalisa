{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Post - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('anggarans.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">jenis_usaha</label>
                                <input type="text" class="form-control @error('jenis_usaha') is-invalid @enderror" name="jenis_usaha" value="{{ old('jenis_usaha') }}" placeholder="Jenis Usaha">
                                <!-- error message untuk jenis_usaha -->
                                @error('jenis_usaha')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">modal</label>
                                <input type="number" class="form-control @error('modal') is-invalid @enderror" name="modal" value="{{ old('modal') }}" placeholder="modal">
                            
                                <!-- error message untuk modal -->
                                @error('modal')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">uang_masuk</label>
                                <input type="number" class="form-control @error('uang_masuk') is-invalid @enderror" name="uang_masuk" value="{{ old('uang_masuk') }}" placeholder="uang_masuk">
                            
                                <!-- error message untuk uang_masuk -->
                                @error('uang_masuk')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">uang_keluar</label>
                                <input type="number" class="form-control @error('uang_keluar') is-invalid @enderror" name="uang_keluar" value="{{ old('uang_keluar') }}" placeholder="uang_keluar">
                            
                                <!-- error message untuk uang_keluar -->
                                @error('uang_keluar')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">keuntungan</label>
                                <input type="number" class="form-control @error('keuntungan') is-invalid @enderror" name="keuntungan" value="{{ old('keuntungan') }}" placeholder="keuntungan">
                            
                                <!-- error message untuk keuntungan -->
                                @error('keuntungan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html> --}}



@extends('index')

@section('content')
<div class="card card-frame">
    <div class="card-body">
        <form action="{{ route('anggarans.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">jenis_usaha</label>
                <input type="text" class="form-control @error('jenis_usaha') is-invalid @enderror" name="jenis_usaha" value="{{ old('jenis_usaha') }}" placeholder="Jenis Usaha">
                <!-- error message untuk jenis_usaha -->
                @error('jenis_usaha')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">modal</label>
                <input type="number" class="form-control @error('modal') is-invalid @enderror" name="modal" value="{{ old('modal') }}" placeholder="Jenis Usaha">
                <!-- error message untuk modal -->
                @error('modal')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">uang_masuk</label>
                <input type="number" class="form-control @error('uang_masuk') is-invalid @enderror" name="uang_masuk" value="{{ old('uang_masuk') }}" placeholder="Jenis Usaha">
                <!-- error message untuk uang_masuk -->
                @error('uang_masuk')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">uang_keluar</label>
                <input type="number" class="form-control @error('uang_keluar') is-invalid @enderror" name="uang_keluar" value="{{ old('uang_keluar') }}" placeholder="Jenis Usaha">
                <!-- error message untuk uang_keluar -->
                @error('uang_keluar')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">keuntungan</label>
                <input type="number" class="form-control @error('keuntungan') is-invalid @enderror" name="keuntungan" value="{{ old('keuntungan') }}" placeholder="Jenis Usaha">
                <!-- error message untuk keuntungan -->
                @error('keuntungan')
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