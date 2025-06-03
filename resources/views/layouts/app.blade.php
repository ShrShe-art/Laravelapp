<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
	    <link rel="stylesheet" href="{{ asset('css/mainapp.css') }}">
       <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.3.1/css/dataTables.bootstrap5.css" rel="stylesheet">-->
<script src="https://cdn.tailwindcss.com/3.4.1"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="flex min-h-screen bg-gray-100">
            
           @include('layouts.sidebar')  
			   <!-- Sidebar goes here -->
           

            <!-- Page Content -->
            <main class="flex-1 bg-white px-6">
           <!-- <div class="sticky top-0 z-10 flex-shrink-0 flex h-16 border-b shadow" style="background-color: rgb(255, 255, 255);">
            <div class="flex-1 px-4 xl:px-8 flex items-center" data-cy="topNavbar">
                <div class="flex flex-1 items-center space-x-4"><h2 class="text-sm md:text-lg whitespace-nowrap" style="color: rgb(42, 48, 61);">Products</h2>
</div></div></div> -->

@include('layouts.topbar')  
			{{ $slot }}
                @yield('content')
            </main>
        </div>
		
		<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@stack('scripts')
    </body>
</html>
