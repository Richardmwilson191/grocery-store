<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <nav>
            <a href="{{ route('dashboard') }}">Home</a>
            <a href="{{ route('product.index') }}">Products</a>
            <a href="{{ route('category.index') }}">Categories</a>
            <a href="{{ route('sales.transaction') }}">Make a sale</a>
        </nav>
    </header>

    @yield('content')
</body>

</html>
