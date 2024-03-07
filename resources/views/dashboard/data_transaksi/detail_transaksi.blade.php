@extends('dashboard.master')

@section('title', 'Detail Transaksi')

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
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Transaksi</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Detail Transaksi</a></li>
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

                                <h4 class="card-title">Table Transaksi</h4><div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Nama</th>
                                                <th class="text-center">QTY</th>
                                                <th class="text-center">Total Transaksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php 
                                            $no = 1;
                                            $total = 0;
                                        @endphp
                                        
                                        @foreach ($list as $i)
                                        @php
                                            $total += $i->total;
                                        @endphp
                                            
                                            <tr>
                                                <td class="text-center">{{ $no++ }}</td>
                                                <td class="text-center">{{ $i->barang->nama_barang}}</td>
                                                <td class="text-center">{{ $i->jumlah_barang }}</td>
                                                <td class="text-center">{{ formatRupiah($i->total) }}</td>
                                            </tr>
                                            @endforeach
                                            <form action="{{ route('transaksi.bayar',$id) }}" method="post" >
                                                @csrf
                                                @method('PUT')
                                            <tr>
                                                <td class="text-right" colspan="3">Total</td>
                                                <td class="text-center" id="total_harga">{{ formatRupiah($total) }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right" colspan="3">Diskon</td>
                                                <td class="text-center"><input class="form-control text-center" type="number" name="diskon" id="diskon"></td>
                                            </tr>
                                            <tr>
                                                <td class="text-right" colspan="3">Total Tagihan</td>
                                                <td class="text-center"><input class="form-control text-center" type="number" name="total" id="total"></td>
                                            </tr>
                                            <tr>
                                                <td class="text-right" colspan="3">Bayar</td>
                                                <td class="text-center"><input class="form-control text-center" type="number" name="bayar" id="bayar"></td>
                                            </tr>
                                            <tr>
                                                <td class="text-right" colspan="3">Kembalian</td>
                                                <td class="text-center"><input class="form-control text-center" type="number" name="kembalian" id="kembalian"></td>
                                            </tr>
                                            <tr>
                                                <td class="text-right" colspan="3"></td>
                                                <td class="text-right"><button type="simpan" id="simpan" class="btn btn-warning">Simpan</button></td>
                                            </tr>
                                        </form>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 <!--**********************************
         Content body end
***********************************-->
 </body>
</html>
@endsection