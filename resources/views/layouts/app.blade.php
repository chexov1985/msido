<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <title>My Laravel App</title>
</head>
<body>
    <header>
        <nav>
            <a href="{{ url('/home') }}">Home</a>
            <a href="{{ url('/profile/1') }}">Profile</a>
            <a href="{{ url('/contact') }}">Contact</a>
        </nav>
    </header>

    <div class="content">
        @yield('content')
    </div>

    <footer>
        <p>&copy; 2025 My Laravel App</p>
    </footer>
</body>
</html>
