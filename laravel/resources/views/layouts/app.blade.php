<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Coffee Quality Prediction')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-stone-100 flex flex-col">

    @include('partials.navbar')

    <main class="flex-1">
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>
