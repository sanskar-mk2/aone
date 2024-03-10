<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>
        {{ config('app.name') }}
    </title>
</head>

<body class="relative"
    :class="{
        'overflow-hidden': is_modal_open
    }"
    x-data="{ is_modal_open: false }">
    
    <x-header />

    <x-hero />
    

    <main class="flex flex-col justify-center items-center">
        <x-about />

        <x-services />

        <x-appointment />

        <x-testimonials />

        <x-contact />
    </main>
    <x-footer />
    @vite('resources/js/app.js')
</body>

</html>
