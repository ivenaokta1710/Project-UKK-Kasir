@extends('dashboard.master')

@section('title',"Edit Data Role")
    
@section('content') 

<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                   
                                    <form action="{{ route('role.update', $data->id) }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Nama Petugas <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select name="id_user" id="petugas" class="form-control">
                                                    <option value="">Nama Petugas</option>
                                                    @foreach ($user as $i)
                                                        <option value="{{ $i->id == $data->id_user ? $data->id_user : $i->id}}"
                                                          {{ $i->id == $data->id_user ? 'selected' : ''}}>
                                                          {{ $i->id == $data->id_user ? $i->name : $i->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <label class="col-lg-4 col-form-label">Akses <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select name="id_akses" id="akses" class="form-control">
                                                    <option value="">Nama Akses</option>
                                                    @foreach ($akses as $i)
                                                    <option value="{{ $i->id ==  $data->id_akses ? $data->id_akses : $i->id}}"
                                                        {{ $i->id == $data->id_akses ? 'selected' : ''}}>
                                                        {{ $i->id == $data->id_akses ? $i->menu : $i->menu}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <a href="{{ route('role.index') }}" type="button" class="btn btn-warning">kembali</a>
                                                <button type="submit" class="btn btn-primary">Edit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
@endsection