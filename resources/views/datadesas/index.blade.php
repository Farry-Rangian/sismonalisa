@extends('index')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Desa</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="exampler" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Nama Desa</th>
                                        <th>Nama Kecamatan</th>
                                        <th>Username</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($datadesas as $datadesa)
                                    <tr>
                                        <td>{{$datadesa->nama_desa}}</td>
                                        <td>{{$datadesa->kecamatan}}</td>
                                        <td>{{$datadesa->user->name}}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>												
                                        </td>												
                                    </tr>
                                    @empty
                                        
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop