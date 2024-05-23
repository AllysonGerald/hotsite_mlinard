<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <title>Matheus Linard</title>
        <!-- ==== Metas / CSS ==== -->
        @include('layouts.path.path-head')
    </head>

    <body>
        
        <!-- ==== Header ==== -->
        @include('layouts.header')
        
        <!-- ==== Content ==== -->
        @yield('content')

        <!-- ==== Footer ==== -->
        @include('layouts.footer')
        
        <!-- ==== Scripts - JS ==== -->
        @include('layouts.path.path-scripts')

    </body>

</html>
