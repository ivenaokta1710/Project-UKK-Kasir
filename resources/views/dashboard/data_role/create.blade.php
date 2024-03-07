@extends('dashboard.master')

@section('title',"Tambah Data Role")
    
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
                                    <form action="{{ route('role.store') }}" method="post">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Nama Petugas<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select name="id_user" id="petugas" class="form-control">
                                                    <option value="">Nama Petugas</option>
                                                    @foreach ($user as $i)
                                                        <option value="{{ $i->id }}">{{ $i->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <label class="col-lg-4 col-form-label">Akses<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select name="id_akses" id="akses" class="form-control">
                                                    <option value="">Nama Menu</option>
                                                    @foreach ($akses as $i)
                                                        <option value="{{ $i->id }}">{{ $i->menu }}</option>
                                                    @endforeach
                                                   </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
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