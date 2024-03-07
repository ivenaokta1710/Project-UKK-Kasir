@extends('dashboard.master')

@section('title',"Dashboard")
    
@section('content') 

<body>
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
                <div class="row">
                    <div class="col-3">
                        <div class="card card-widget">
                            <div class="card-body gradient-3">
                                <div class="media">
                                    <span class="card-widget__icon"><i class="fa fa-shopping-cart"></i></span>
                                    <div class="media-body">
                                        <h2 class="card-widget__title">{{$penjualan}}</h2>
                                        <h5 class="card-widget__subtitle">Penjualan</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="card card-widget">
                            <div class="card-body gradient-4">
                                <div class="media">
                                    <span class="card-widget__icon"><i class="icon-tag"></i></span>
                                    <div class="media-body">
                                        <h2 class="card-widget__title">{{$barang}}</h2>
                                        <h5 class="card-widget__subtitle">Products</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="card card-widget">
                            <div class="card-body gradient-4">
                                <div class="media">
                                    <span class="card-widget__icon"><i class="icon-emotsmile"></i></span>
                                    <div class="media-body">
                                        <h2 class="card-widget__title">{{$petugas}}</h2>
                                        <h5 class="card-widget__subtitle">Petugas</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="card card-widget">
                            <div class="card-body gradient-9">
                                <div class="media">
                                    <span class="card-widget__icon"><i class="fa fa-money"></i></span>
                                    <div class="media-body">
                                        <h2 class="card-widget__title">{{$pelanggan}}</h2>
                                        <h5 class="card-widget__subtitle">Pembeli</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-5">
                        <div class="card card-widget">
                            <div class="card-body">
                                <h5 class="text-muted">This Month</h5>
                                <h2 class="mt-4">{{formatRupiah($totalPenjualan)}}</h2>
                                <span>Total Pendapatan</span>
                                <div class="mt-4">
                                    <h6>Online Order <span class="pull-right">80%</span></h6>
                                    <div class="progress mb-3" style="height: 7px">
                                        <div class="progress-bar gradient-1" style="width: 80%;" role="progressbar"><span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <h6 class="m-t-10 text-muted">Offline Order <span class="pull-right">50%</span></h6>
                                    <div class="progress mb-3" style="height: 7px">
                                        <div class="progress-bar gradient-3" style="width: 50%;" role="progressbar"><span class="sr-only">50% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table class="table table-xs mb-0">
                                            <thead>
                                                <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 1; @endphp
                                            @foreach ($petugias as $ptg)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $ptg->name }}</td>
                                                <td>{{ $ptg->email }}</td>
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

                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-content">
                                    <div class="stat-text">Total Diskon</div>
                                    <div class="stat-digit gradient-3-text"></i>{{formatRupiah($totalDiskon)}}</div>
                                </div>
                                <div class="progress mb-3">
                                    <div class="progress-bar gradient-3" style="width: 50%;" role="progressbar"><span class="sr-only">50% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-content">
                                    <div class="stat-text">Total Stok</div>
                                    <div class="stat-digit gradient-4-text">{{$stokTersedia}}</div>
                                </div>
                                <div class="progress mb-3">
                                    <div class="progress-bar gradient-4" style="width: 40%;" role="progressbar"><span class="sr-only">40% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-content">
                                    <div class="stat-text">Belum Bayar</div>
                                    <div class="stat-digit gradient-4-text">{{formatRupiah($totalBatal)}}</div>
                                </div>
                                <div class="progress mb-3">
                                    <div class="progress-bar gradient-4" style="width: 15%;" role="progressbar"><span class="sr-only">15% Complete</span>
                                    </div>
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