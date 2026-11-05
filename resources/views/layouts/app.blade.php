<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    <footer>
        <p>Laravel Basics - Week 3 Day 2</p>
    </footer>

</body>
</html>
