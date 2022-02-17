<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title> @yield('title', env('APP_NAME') )</title>
    </head>
    <body class="py-6 flex flex-col justify-between items-center min-h-screen">
        <main role="main" class="flex flex-col justify-center items-center">
            @yield('content')
        </main>
    
        <footer class="text-gray-400">
            <p>
                &copy; Copyright {{ date('Y') }} 
                &middot; <a class="text-indigo-400 hover:text-indigo-600 underline" href="/about-me">About Me</a>
            </p>
        </footer>

    </body>
</html>
