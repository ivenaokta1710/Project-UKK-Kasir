@extends('dashboard.master')

@section('title', 'Data Transaksi Terbayar')

@section('content')
   <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Transaksi Terbayar</a></li>
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

                                <h4 class="card-title">Data Table Transaksi </h4> <div class="table-responsive">
                                    <table id="example1"  class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Tanggal</th>
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
                                                <td>{{ formatrupiah($i->total_harga) }}</td>
                                                <td>
                                                    <a href="{{route('nota.pdf',$i->id)}}" class="btn btn-primary"><i class="nav-icon fas fa-file-invoice"></i> Nota</a>
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