<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    
    <!-- Include compiled CSS (make sure it's working via Laravel Mix/Vite) -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.scss') }}">

    <script src="{{ asset('js/app.js') }}"></script>

    <script src="{{ mix('js/app.js') }}"></script> <!-- Example for compiled JS -->
    @stack('styles') <!-- Additional styles if needed -->

    <!-- Include Vite for dynamic assets -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="light:bg-white dark:bg-gray-900 transition-colors duration-300" style="background-image:url('images/bg.gif')">

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="/images/navbar_icon.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                    <span class="ms-2">Personal Profile</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item ms-3">
                            <a class="nav-link active" aria-current="page" href="/home">Home</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link" href="#">About Me</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link" href="#">Contact Me</a>
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

