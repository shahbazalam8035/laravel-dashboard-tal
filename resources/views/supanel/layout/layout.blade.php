<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    
</head>
<body>
    <div class="container">
        <header>
            <h1>Admin Panel</h1>
            <nav>
                <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                <form id="logout-form" action="#" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </nav>
        </header>

        <main>
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/quill.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
