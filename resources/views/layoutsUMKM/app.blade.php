<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMKMAja!</title>

    <!-- font dari cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>


    <!-- css link -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/lightbox.min.css')}}" rel="stylesheet">
    <style>
    body, html {
        height: 100%;
    }
    #sidebar {
        min-width: 130px;
    }
    </style>
</head>
<body>
    <!-- header awal -->
    @include('layoutsUMKM.sidebar')
    <!-- header akhir -->

    @yield('content')

    <!-- Sript -->
    <script src="{{asset('js/dialog.js')}}"></script>
    <script src="{{asset('js/sidebar.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/lightbox.min.css')}}" rel="stylesheet">
    <!-- footer awal -->
    @include('layouts.footer  ')
    <!-- footer akhir -->
</body>
</html>