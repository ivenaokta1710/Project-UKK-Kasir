@extends('dashboard.master')

@section('title',"Transaksi")
    
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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Transaksi</a></li>
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

                                <h4 class="card-title">Data Table Transaksi</h4> <div class="table-responsive">
                                    <table id="example1"  class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Tanggal Pembelian</th>
                                                <th>Total Transaksi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 1; @endphp
                                            @foreach ($data as $i)
                                            
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $i->detail_penjualan->nama_pemesan}}</td>
                                                <td>{{ $i->tanggal_penjualan }}</td>
                                                <td>{{ formatRupiah($i->total_harga) }}</td>
                                                <td>
                                                    <form action="{{ route('transaksi.destroy', $i->id) }}" method="post" class="delete-form">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href=" {{ route('transaksi.detail', $i->id) }} "
                                                        class="btn btn-warning" type="button"><i class="nav-icon fas fa-cash-register"></i>  Bayar</a>
                                                        <button type="submit" class="btn btn-danger"><i class=" nav-icon fas fa-trash-alt"></i>     
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