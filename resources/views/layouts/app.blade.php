<!-- The only way to do great work is to love what you do. - Steve Jobs -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | TehYung</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <x-navbar :username="$username ?? null" />

    <main class="container">
        @yield('content')
    </main>
</body>
</html>
