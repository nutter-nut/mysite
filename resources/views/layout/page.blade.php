<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body style="color: red;">
    <h1>MySite.test</h1>

    @include('partials.navlinks')

    @yield('content')

    @if(Request::route()->getName() == 'home')
        <p>Home จริง ๆ นะ</p>
    @endif
    <!-- {{ Request::route()->getName() }} ดูว่าอยู่หน้าไหนบ้าง -->
</body>
</html>