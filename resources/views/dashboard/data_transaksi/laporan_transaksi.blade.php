@extends('dashboard.master')

@section('title', 'Laporan Transaksi')

@section('content')
<body>

 <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">@yield('title')</a></li>
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
                                <form class="form-inline mb-1" action="{{ route('cetak.transaksi') }}" method="post">
                                    @csrf
                                    <label for="" class="mr-2">Pencarian</label>
                                    <input type="text" name="bulan_tahun" class="form-control mr-2" id="datepicker">
                                    <button class="btn btn-primary">Cetak</button>
                                </form>

                                <div class="table-responsive">
                                    <table id="example2"  class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Tanggal</th>
                                                <th>Total Transaksi</th>
                                                <th>Status</th>
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
                                                    {{ $i->status }}
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
        </div>
</body>
@endsection