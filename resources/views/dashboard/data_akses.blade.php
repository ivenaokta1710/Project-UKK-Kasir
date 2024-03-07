@extends('dashboard.master')

@section('title',"Data Menu")
    
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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Akses</a></li>
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
                                <a href="{{ route('akses.create') }}" type="button" class="btn btn-warning mb-2">Tambah Data Menu</a>
                                <div class="table-responsive">
                                    <table id="example1"  class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Menu</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 1; @endphp
                                            @foreach ($data as $i)
                                            
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $i->menu }}</td>
                                                <td>
                                                    <form action="{{ route('akses.destroy', $i->id)}}" method="post" class="delete-form">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{route('akses.edit',$i->id)}}" class="btn btn-warning" type="button">Edit</a>
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