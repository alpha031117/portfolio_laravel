<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <!-- In your layout's head section -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">


    <!-- Include compiled CSS (make sure it's working via Laravel Mix/Vite) -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.scss') }}">

    <script src="{{ asset('js/app.js') }}"></script>

    <script src="{{ mix('js/app.js') }}"></script> <!-- Example for compiled JS -->
    @stack('styles') <!-- Additional styles if needed -->

    <!-- Include Vite for dynamic assets -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="light:bg-white dark:bg-gray-900 transition-colors duration-300"
    style="background-image:url('images/bg.gif')">

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-body-primary">
            <div class="container-fluid justify-content-center">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item ms-3">
                            <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="/">Home</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About Us</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="/contact">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>



    <main class="p-5">
        @yield('content') <!-- This is where the page-specific content will go -->
    </main>

    {{-- <footer class="text-center">
        <hr>
        <p>&copy; {{ date('Y') }} Portfolio BCS3453</p>
    </footer> --}}



    @stack('scripts') <!-- Additional scripts if needed -->
