@extends('dashboard.master')

@section('title',"Data Barang")
    
@section('content') 

<body>
  {{-- Start Content PHP --}}

   
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Barang</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                     {{ session('success') }}
                                </div>
                                @endif

                                <h4 class="card-title">Data Table</h4>
                                <a href="{{ route('barang.create') }}" type="button" class="btn btn-warning mb-2">Tambah Data Barang</a>
                                <div class="table-responsive">
                                    <table id="example1"  class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Petugas</th>
                                                <th>Harga</th>
                                                <th>Stok</th>
                                                <th>Foto</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 1; @endphp
                                            @foreach ($data as $i)
                                            
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $i->nama_barang }}</td>
                                                <td>{{ $i->user->name }}</td>
                                                <td>{{ formatRupiah($i->harga) }}</td>
                                                <td>{{ $i->stok }}</td>
                                                <td> <img src="{{ asset('storage/'.$i->photo) }}" alt="photo" height="100"> </td>
                                                <td>
                                                     <!-- Modal -->
                                                <div class="modal fade" id="tambah_stok_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="tambah_stok_modal">Tambah Stok</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <form action="{{ route('tambah_stok') }}" method="post">
                                                            @csrf
                                                            <label for="">Nama Barang</label>
                                                            <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                                                            <input type="hidden" class="id" name="id" id="id">
                                                            <label for="">Stok</label>
                                                            <input type="number" class="form-control" name="tambah_stok" id="tambah_stok">


                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </form>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                    <form action="{{ route('barang.destroy', $i->id)}}" method="post" class="delete-form">
                                                        @csrf
                                                        @method('DELETE')
                                                          <!-- Button trigger modal -->
                                                        <button type="button" data-id="{{ $i->id }}" data-nama="{{$i->nama_barang}}" class="btn btn-primary tambah_stok" data-toggle="modal" data-target="#tambah_stok_modal">
                                                            Tambah Stok
                                                        </button>
                                                        <a href="{{route('barang.edit',$i->id)}}" class="btn btn-warning" type="button">Edit</a>
                                                        <button type="submit" class="btn btn-danger" type="button">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
        
        

</body>

</html>
@endsection