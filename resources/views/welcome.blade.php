<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    {{-- <link rel="stylesheet"
        href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"
        defer></script> --}}
    <title>
        {{ config('app.name') }}
    </title>
</head>

<body x-data="{ open: false }"
    class="">
    <header class="">
        <nav class="w-full p-4 flex items-center justify-between bg-gray-700">
            <div class="flex items-center">
                <img src="{{ Vite::asset('/resources/svgs/logo.svg') }}"
                    class=" w-16 mr-2"
                    alt="Logo">

                <h1 class="text-lg font-bold">
                    {{ config('app.name') }}
                </h1>
            </div>
            <ul class="flex items-center">
                <li class="ml-6 hidden">Home</li>
                <li class="ml-6 hidden">About Us</li>
                <li class="ml-6 hidden">Services</li>
                <li class="ml-6 hidden">Contact Us</li>
                <li class="ml-6 hidden">Testimonials</li>
                <li class="ml-6 hidden">Book an Appointment</li>
            </ul>
        </nav>


    </header>
    <section id=heroImg>
        <div>
            <figure>
                <img src=""
                    alt="">
            </figure>
        </div>
    </section>

</body>

</html>
