<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ env('APP_NAME') }} | @yield('title')</title>
    <!-- Dengan menggunakan CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-...." crossorigin="anonymous" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="{{ asset('quixmas/images/logo.png') }}">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('quixmas/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('quixmas/plugins/tables/css/datatable/dataTables.bootstrap4.min.css')}}" >
    
    <!-- DataTables -->{{--
    <link rel="stylesheet" href="{{ asset('quixmas/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('quixmas/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('quixmas/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
     --}}
      <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
</head>
