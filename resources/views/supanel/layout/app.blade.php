<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/quill.snow.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>

    <div class="d-flex" id="wrapper">
        @include('supanel.layout.sidebar')

        <div id="page-content-wrapper">
            @include('supanel.layout.navbar')

            <div class="container-fluid p-4">
                @yield('content')
            </div>
        </div>
    </div>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/quill.js') }}"></script>
<script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>
