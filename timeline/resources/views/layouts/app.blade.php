<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title', 'Timeline')</title>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <header>
            <!-- Navbar -->
            @isset($navbar)
                {{ $navbar }}
            @endisset
        </header>

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
