<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @vite('resources/js/script.js')
    <title>
        {{ config('app.name') }}
    </title>
</head>

<body class="relative"
    :class="{
        'overflow-hidden': is_modal_open
    }"
    x-data="{ is_modal_open: false }">
    <header
        class="lg:absolute lg:w-full lg:mt-8 lg:z-10 lg:flex lg:justify-center">
        <nav
            class="w-full p-4 px-8 flex flex-col lg:flex-row items-center justify-between flex-nowrap bg-slate-200 lg:absolute lg:w-10/12 lg:z-10 lg:rounded-xl">
            <div class="flex justify-between w-full">
                <a class="flex items-center group"
                    href="/">
                    <img src="{{ Vite::asset('/resources/svgs/logo.svg') }}"
                        class=" w-12 mr-2 group-hover:animate-spin"
                        alt="Logo">
                    <h1 class="text-lg font-bold ml-1 md:hidden">
                        Aone
                    </h1>
                    <h1 class="text-xl font-bold hidden md:block">
                        {{ config('app.name') }}
                    </h1>
                </a>
                <div class="lg:hidden">
                    <label class="btn btn-circle swap swap-rotate bg-slate-200">
                        <!-- this hidden checkbox controls the state -->
                        <input type="checkbox"
                            id="menuToggle" />

                        <!-- hamburger icon -->
                        <svg class="swap-off fill-current"
                            xmlns="http://www.w3.org/2000/svg"
                            width="32"
                            height="32"
                            viewBox="0 0 512 512">
                            <path
                                d="M64,384H448V341.33H64Zm0-106.67H448V234.67H64ZM64,128v42.67H448V128Z" />
                        </svg>

                        <!-- close icon -->
                        <svg class="swap-on fill-current"
                            xmlns="http://www.w3.org/2000/svg"
                            width="32"
                            height="32"
                            viewBox="0 0 512 512">
                            <polygon
                                points="400 145.49 366.51 112 256 222.51 145.49 112 112 145.49 222.51 256 112 366.51 145.49 400 256 289.49 366.51 400 400 366.51 289.49 256 400 145.49" />
                        </svg>
                    </label>
                </div>
            </div>
            <ul id="menuExpand"
                class="flex basis-full w-full mt-8 lg:mt-0 gap-4 lg:items-center lg:basis-0 flex-col lg:flex-row lg:w-full">
                <li class="lg:w-full"><a href=""
                        class="lg:w-full hover:text-sky-700 transition-all">Home</a>
                </li>
                <li class="lg:w-full"><a href="#aboutUs"
                        class="lg:w-full whitespace-nowrap hover:text-sky-700 transition-all">About
                        Us</a>
                </li>
                <li class="lg:w-full"><a href="#servicesWeOffer"
                        class="hover:text-sky-700 transition-all">Services</a>
                </li>
                <li class="lg:w-full"><a href=""
                        class="hover:text-sky-700 whitespace-nowrap transition-all">Contact
                        Us</a>
                </li>
                <li class="lg:w-full"><a href="#Testmonials"
                        class="hover:text-sky-700 transition-all">Testimonials</a>
                </li>
                <li x-on:click="is_modal_open = true"
                    class="py-2 lg:mt-0 px-5 mt-2 cursor-pointer bg-sky-700 rounded-md w-full text-white">
                    <span class="transition-all whitespace-nowrap">Book an
                        Appointment</span>
                </li>
            </ul>
        </nav>


    </header>
    <section id=heroImg>
        <div class="relative h-[60vh] bg-black md:h-[100vh]">
            <img src="{{ Vite::asset('/resources/images/hero.jpg') }}"
                class="absolute inset-0 w-full h-[60vh] object-cover opacity-40 md:h-[100vh]"
                alt="">
            <div
                class="absolute inset-0 flex flex-col items-center justify-center text-center text-white px-5 md:px-20 ">
                <h1 class="text-3xl font-bold mb-4 md:text-5xl">Personalized
                    Care for
                    Seniors</h1>
                <p class="text-base md:text-xl">At {{ config('app.name') }}, we
                    understand
                    the importance of trust and reliability in caregiving.
                    That's why we prioritize open communication, compassion, and
                    professionalism in every interaction. Let us be your partner
                    in providing exceptional care for your loved ones.</p>
            </div>
        </div>

    </section>

    <main class="flex flex-col justify-center items-center">
        <section id="aboutUs"
            class="max-w-screen-xl min-w-[300px] py-20 flex justify-center px-8">
            <div
                class="flex flex-col items-center gap-8 md:flex-row-reverse md:max-w-screen-lg lg:max-w-screen-lg">
                <article class="md:w-3/5 md:ml-20">
                    <h2 class="text-3xl font-bold mb-5 md:text-4xl">About Us
                    </h2>
                    <p class="text-base text-gray-500 mb-10 md:text-lg">We
                        understand the
                        unique needs and challenges that come
                        with aging. That's why we're dedicated to providing
                        compassionate and comprehensive support services
                        tailored specifically for older adults. Whether it's
                        assistance with daily tasks, transportation to
                        appointments, or companionship, we're here to help
                        seniors maintain their independence and enjoy a
                        fulfilling lifestyle.</p>
                    <div class="flex flex-col gap-8">
                        <div class="flex items-center gap-3">
                            <div
                                class="flex items-center justify-center h-12 w-12 rounded-full bg-sky-700">
                                <x-checkmark />
                            </div>
                            <span class="md:text-lg font-bold">Qualified
                                Staff</span>
                        </div>

                        <div class="flex items-center gap-3">
                            <div
                                class="flex items-center justify-center p-2 h-12 w-12 rounded-full bg-sky-700">
                                <x-checkmark />
                            </div>
                            <span class="md:text-lg font-bold">Personalized Care
                                Plans</span>
                        </div>

                        <div class="flex items-center gap-3">
                            <div
                                class="flex items-center justify-center p-2 h-12 w-12 rounded-full bg-sky-700">
                                <x-checkmark />
                            </div>
                            <span class="md:text-lg font-bold">24/7
                                Availability</span>
                        </div>

                        <div class="flex items-center gap-3">
                            <div
                                class="flex items-center justify-center p-2 h-12 w-12 rounded-full bg-sky-700">
                                <x-checkmark />
                            </div>
                            <span class="md:text-lg font-bold">Flexible
                                Options</span>
                        </div>
                    </div>
                </article>
                <figure class="w-full h-fit md:w-2/5">
                    <img src="{{ Vite::asset('/resources/images/aboutus.jpg') }}"
                        class="w-full"
                        alt="">
                </figure>
            </div>

        </section>

        <section id="servicesWeOffer"
            class="w-full py-20 px-8 flex justify-center bg-slate-200">
            <div
                class="flex flex-col items-center max-w-[450px] md:max-w-screen-lg lg:max-w-screen-lg">
                <article class="text-center">
                    <h2 class="text-3xl font-bold mb-5 md:text-4xl">Our Services
                    </h2>
                    <p class="text-base text-gray-500 mb-10 md:text-lg">Our team
                        is
                        committed to providing reliable, compassionate care that
                        enriches the lives of the seniors we serve.</p>
                </article>
                <div
                    class="max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 lg:grid-cols-3">
                    <x-service-card title="Transportation Assistance"
                        description="We provide safe and reliable transportation services to help seniors get to appointments, social outings, and errands with ease. Whether it's a leisurely stroll in the park or a trip to the grocery store, our friendly drivers are here to assist.">
                        <x-transportation />
                    </x-service-card>

                    <x-service-card title="Accommodation Support"
                        description="Finding the right accommodation can be overwhelming for seniors and their families. Our team can help navigate the process, whether it's finding suitable housing options or assisting with the transition to a new living arrangement.">
                        <x-house />
                    </x-service-card>

                    <x-service-card title="In-Home Care"
                        description="Our trained caregivers offer personalized in-home care services to support seniors with daily activities such as bathing, dressing, meal preparation, medication reminders, and more. We provide the assistance seniors need to maintain their independence and quality of life in the comfort of their own homes.">
                        <x-care />
                    </x-service-card>

                    <x-service-card title="Support Coordination"
                        description="Navigating the complex landscape of senior services and resources can be daunting. Our experienced support coordinators work closely with seniors and their families to identify needs, develop personalized care plans, and connect them with the right community resources and support networks.">
                        <x-support />
                    </x-service-card>

                    <x-service-card title="Daily Tasks Assistance"
                        description="From light housekeeping and laundry to grocery shopping and meal planning, we're here to lend a helping hand with everyday tasks. Our goal is to alleviate the stress of household chores so seniors can focus on what matters most – enjoying life to the fullest.">
                        <x-task />
                    </x-service-card>

                    <x-service-card title="Social Engagement Programs"
                        description="Maintaining social connections and participating in engaging activities is essential for seniors' overall well-being. Our social engagement programs offer a variety of recreational, educational, and cultural activities tailored to seniors' interests and abilities. Whether it's group outings, arts and crafts workshops, book clubs, or fitness classes.">
                        <x-social />
                    </x-service-card>
                </div>
            </div>
        </section>

        <x-appointment />

        <section id="Testmonials"
            class="w-full py-20 px-8 flex justify-center bg-slate-200">
            <div
                class="flex flex-col items-center max-w-[450px] md:max-w-screen-lg lg:max-w-screen-lg">
                <h1 class="py-10 text-4xl font-bold">Happy Customers</h1>
                <div class="carousel w-full">
                    <div id="slide1"
                        class="carousel-item relative w-full">
                        <img src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
                            class="w-full" />
                        <div
                            class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                            <a href="#slide4"
                                class="btn btn-circle">❮</a>
                            <a href="#slide2"
                                class="btn btn-circle">❯</a>
                        </div>
                    </div>
                    <div id="slide2"
                        class="carousel-item relative w-full">
                        <img src="https://daisyui.com/images/stock/photo-1609621838510-5ad474b7d25d.jpg"
                            class="w-full" />
                        <div
                            class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                            <a href="#slide1"
                                class="btn btn-circle">❮</a>
                            <a href="#slide3"
                                class="btn btn-circle">❯</a>
                        </div>
                    </div>
                    <div id="slide3"
                        class="carousel-item relative w-full">
                        <img src="https://daisyui.com/images/stock/photo-1414694762283-acccc27bca85.jpg"
                            class="w-full" />
                        <div
                            class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                            <a href="#slide2"
                                class="btn btn-circle">❮</a>
                            <a href="#slide4"
                                class="btn btn-circle">❯</a>
                        </div>
                    </div>
                    <div id="slide4"
                        class="carousel-item relative w-full">
                        <img src="https://daisyui.com/images/stock/photo-1665553365602-b2fb8e5d1707.jpg"
                            class="w-full" />
                        <div
                            class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                            <a href="#slide3"
                                class="btn btn-circle">❮</a>
                            <a href="#slide1"
                                class="btn btn-circle">❯</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="bg-sky-700 text-white px-8 py-20  w-full">
        <p class="text-center text-white">
            &copy; 2024 Aone. All rights reserved.
        </p>
    </footer>

</body>

</html>
