<head>

    <title>@yield('title') </title>

    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{  asset('public/backend/assets/img/favicon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{  asset('public/backend/assets/css/bootstrap.min.css')}}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{  asset('public/backend/assets/css/font-awesome.min.css')}}">

    <!-- Lineawesome CSS -->
    <link rel="stylesheet" href="{{  asset('public/backend/assets/css/line-awesome.min.css')}}">

    <!-- Datatable CSS -->
		<link rel="stylesheet" href="{{ asset('public/backend/assets/css/dataTables.bootstrap4.min.css') }}">

    <!-- Chart CSS -->
    <link rel="stylesheet" href="{{  asset('public/backend/assets/plugins/morris/morris.css')}}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('public/backend/assets/css/style.css') }}">

    <!-- Datatable CSS -->
		<link rel="stylesheet" href="{{ asset('public/backend/assets/css/dataTables.bootstrap4.min.css') }}">
            {{-- sweet alert --}}
            <link rel="stylesheet" href="{{ asset('public/backend/assets/css/sweetalert.css') }}">



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>
