<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title> @yield('title', env('APP_NAME') )</title>
    </head>
    <body>
        @yield('content')

        <!-- {{ config('database.connections.sqlite.driver') }} -->
    
        <footer>
            <p>
                &copy; Copyright {{ date('Y') }} 
                &middot; <a href="/about-me">About Me</a>
            </p>
        </footer>

    </body>
</html>
