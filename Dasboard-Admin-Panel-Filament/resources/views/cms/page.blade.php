<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $page->title }}</title>
</head>

<body>

    <header>
        <nav>
            <a href="{{ route('home') }}">Home</a>

            <a href="{{ url('/admin/login') }}">
                Sign In
            </a>
        </nav>
    </header>

    <main>
        <h1>{{ $page->title }}</h1>

        <div>
            {!! $page->content !!}
        </div>
    </main>

</body>
</html>