@if(Request::route()->getName() != 'home')
    <a href="{{ url('/') }}">home</a>
@endif

@if(Request::route()->getName() != 'about')
    <a href="{{ url('/about') }}">about</a>
@endif

@if(Request::route()->getName() != 'contact')
    <a href="{{ url('/contact') }}">Contact</a>
@endif