<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-800">
    <div class="flex">
        <div>

            @include('components.sidenav')
        </div>
        <div>
            @yield('content')
        </div>
    </div>
</body>

</html>