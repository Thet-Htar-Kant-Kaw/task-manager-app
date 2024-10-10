<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        <div id="app">
            <main>
                @yield('content')
            </main>
        </div>
        @yield('scripts')
    </body>
</html>