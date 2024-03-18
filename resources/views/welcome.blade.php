<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>
        {{ config('app.name') }}
    </title>
</head>

<body class="relative"
    :class="{
        'overflow-hidden': is_modal_open
    }"
    x-data="{ is_modal_open:  @js($errors->any()) }">

    <x-header />

    <x-hero />

    <div x-data="{ to_show: @js($formValidationSuccess) }"
        x-show="to_show"
        x-init="to_show ? setTimeout(() => to_show = false, 5000) : null"
        x-cloak
        class="text-2xl fixed flex p-24 top-0 w-full z-50 font-bold text-center">
        <div role="alert"
            class="alert alert-success w-9/10">
            <svg xmlns="http://www.w3.org/2000/svg"
                class="stroke-current shrink-0 h-6 w-6"
                fill="none"
                viewBox="0 0 24 24">
                <path stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>Successfully submitted form. We will get back to you
                soon.</span>
        </div>
    </div>

    <div x-data="{ to_show: @js($errors->any()) }"
        x-show="to_show"
        x-init="to_show ? setTimeout(() => to_show = false, 5000) : null"
        x-cloak
        class="text-2xl fixed flex p-24 top-0 w-full z-50 font-bold text-center">
        <div role="alert"
            class="alert alert-success w-9/10">
            <svg xmlns="http://www.w3.org/2000/svg"
                class="stroke-current shrink-0 h-6 w-6"
                fill="none"
                viewBox="0 0 24 24">
                <path stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>
                @foreach ($errors->all() as $error)
                    {{ $error }}<br />
                @endforeach
            </span>
        </div>
    </div>

    <main class="flex flex-col justify-center items-center">
        <x-about />
        <x-services />

        <x-appointment />

        <x-testimonials />

        <x-contact />
    </main>
    <x-footer />
</body>

</html>
