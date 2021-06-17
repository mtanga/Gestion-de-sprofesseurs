<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div id="app-2">
        @auth
        @include('layouts.navbar')
               <div class="main flex flex-wrap justify-end mt-16">
            
            <div class="content w-full">
                <div class="container mx-auto p-4 sm:p-6">

                    @yield('content')
                    
                </div>
            </div>
        </div>
    </div>
        @endauth

    <div id="app">
       
        <main class="">
            @yield('content')
        </main>
    </div>
</body>
</html>