<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') | {{ config('app.name') }}</title>

        <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/presentation.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/about.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/experiences.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/animations.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/responsive.css') }}">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <script src="{{ asset('/js/animations.js') }}" defer></script>


    </head>
    <body>
        <header class="main-header">
            <div class="logo">
                <img src="{{ asset('/images/logo.jpg') }}">
            </div>

            <ul>
                <li>
                    <a href="#experiences" class="experience-link">Experience</a>
                </li>
                <li>
                    <a href="mailto:bissaye.com@gmail.com" class="contact-link">Contact me</a>
                </li>
            </ul>
        </header>

        <main>
            @yield('content')
        </main>
       
       <footer class="main-footer">
        <p>
            &copy; Copyright {{ date('Y') }} &middot; <span class="credit-nom">Franck Bissaye<span>
        </p>
        <ul>
            <li>
                <a href="https://www.linkedin.com/in/franck-bissaye-1190981b2/" target="_blank">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
            </li>
            <li>
                <a href="https://github.com/bissaye/" target="_blank">
                    <i class="fa-brands fa-github"></i>
                </a>
            </li>
        </ul>
       </footer>
    </body>
</html>
