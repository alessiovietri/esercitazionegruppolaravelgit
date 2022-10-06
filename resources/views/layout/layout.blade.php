<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    @yield('css')
</head>

<body>

    <h1>Products</h1>

    <ul>
        <li>
            <a href="{{ route('pagina-1') }}">Pagina 1</a>
        </li>
        <li>
            <a href="{{ route('pagina-2') }}">Pagina 2</a>
        </li>

        <li>
            <a href="{{ route('pagina-4') }}">Pagina 4</a>
        </li>
        <li>
            <a href="{{ route('prove-pagina-3') }}">Prove pagina 3</a>
        </li>
    </ul>

    <main>
        @yield('content')
    </main>

    <script src="@yield('js')"></script>
</body>

</html>