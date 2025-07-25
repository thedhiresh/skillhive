<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title') </title>
    @vite('resources/css/app.css')
</head>
<body>

<x-sidebar/>

@yield('dash-content')

</body>
</html>
