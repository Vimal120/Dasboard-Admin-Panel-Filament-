<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? config('app.name', 'Laravel CMS') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <header>
        <nav style="
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 30px;
            border-bottom: 1px solid #ddd;
        ">

            <div>
                <a href="{{ url('/') }}">
                    <strong>{{ config('app.name', 'Laravel CMS') }}</strong>
                </a>
            </div>

            <div style="display: flex; gap: 20px;">

                <a href="{{ url('/') }}">
                    Home
                </a>

                <a href="{{ url('/about-us') }}">
                    About Us
                </a>

                <a href="{{ url('/contact-us') }}">
                    Contact Us
                </a>

                <a href="{{ url('/admin/login') }}">
                    Sign In
                </a>

            </div>

        </nav>
    </header>

    <main>
        @yield('content')
    </main>

</body>
</html>
