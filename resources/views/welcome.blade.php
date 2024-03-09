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
        class="lg:absolute lg:top-0 lg:w-full lg:mt-8 lg:z-10 lg:flex lg:justify-center ">
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
    <section id="heroImg">
        <div class="relative h-[60vh] bg-black md:h-[100vh]">
            {{-- Hero slider divs --}}
            <div>
                <img src="{{ Vite::asset('/resources/images/hero.jpg') }}"
                    class="absolute inset-0 w-full h-[60vh] object-cover opacity-40 md:h-[100vh]"
                    alt="">
                <div
                    class="absolute inset-0 flex flex-col items-center justify-center text-center text-white px-5 md:px-20 ">
                    <h1 class="text-3xl font-bold mb-4 md:text-5xl">Personalized
                        Care for
                        Seniors</h1>
                    <p class="text-base md:text-xl">At {{ config('app.name') }},
                        we
                        understand
                        the importance of trust and reliability in caregiving.
                        That's why we prioritize open communication, compassion,
                        and
                        professionalism in every interaction. Let us be your
                        partner
                        in providing exceptional care for your loved ones.</p>
                </div>
            </div>

            <div class="hidden">
                <img src="{{ Vite::asset('/resources/images/hero2.jpg') }}"
                    class="absolute inset-0 w-full h-[60vh] object-cover opacity-40 md:h-[100vh]"
                    alt="">
                <div
                    class="absolute inset-0 flex flex-col items-center justify-center text-center text-white px-5 md:px-20 ">
                    <h1 class="text-3xl font-bold mb-4 md:text-5xl">
                        Compassionate Senior Care</h1>
                    <p class="text-base md:text-xl">We understand the importance
                        of trust and reliability in caregiving. That's why we
                        prioritize open communication, compassion, and
                        professionalism in every interaction. Let us be your
                        partner in providing exceptional care for your loved
                        ones.</p>
                </div>
            </div>

            <div class="hidden">
                <img src="{{ Vite::asset('/resources/images/hero3.jpg') }}"
                    class="absolute inset-0 w-full h-[60vh] object-cover opacity-40 md:h-[100vh]"
                    alt="">
                <div
                    class="absolute inset-0 flex flex-col items-center justify-center text-center text-white px-5 md:px-20 ">
                    <h1 class="text-3xl font-bold mb-4 md:text-5xl">Empowering
                        Elderly Independence</h1>
                    <p class="text-base md:text-xl">Discover personalized care
                        tailored to the unique needs of seniors. With a focus on
                        dignity and respect, we provide comprehensive support
                        services to enhance their quality of life. Join us in
                        creating a fulfilling journey for your loved ones.</p>
                </div>
            </div>

            <div class="hidden">
                <img src="{{ Vite::asset('/resources/images/hero3.jpg') }}"
                    class="absolute inset-0 w-full h-[60vh] object-cover opacity-40 md:h-[100vh]"
                    alt="">
                <div
                    class="absolute inset-0 flex flex-col items-center justify-center text-center text-white px-5 md:px-20 ">
                    <h1 class="text-3xl font-bold mb-4 md:text-5xl">Cherishing
                        Life's Senior Moments</h1>
                    <p class="text-base md:text-xl">At {{ config('app.name') }},
                        we celebrate the wisdom and experience that come with
                        age. Through personalized attention and heartfelt
                        compassion, we ensure that every senior receives the
                        care they deserve. Let us help you cherish and embrace
                        every moment with your loved ones.</p>
                </div>
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
                        loading='lazy'
                        alt="">
                </figure>
            </div>

        </section>

        <section id="servicesWeOffer"
            class="w-full py-20 px-8 flex justify-center bg-slate-200">
            <div
                class="flex flex-col items-center max-w-[450px] md:max-w-screen-lg lg:max-w-screen-lg">
                <article class="text-center">
                    <h2 class="text-3xl font-bold mb-5 md:text-4xl">Our
                        Services
                    </h2>
                    <p class="text-base text-gray-500 mb-10 md:text-lg">Our
                        team
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
            class="w-full py-20 px-8 flex justify-center bg-white">
            <div
                class="flex flex-col items-center max-w-[450px] md:max-w-screen-lg lg:max-w-screen-lg">
                <h1 class="py-10 text-4xl font-bold">Happy Customers</h1>
                <div class="carousel w-full">
                    <div id="slide1"
                        class="carousel-item relative w-full">

                        <x-testmonial-card
                            message="Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Quis voluptatem
                                        blanditiis aperiam tempore cupiditate
                                        quaerat deserunt sequi quae tempora
                                        architecto."
                            image="{{ Vite::asset('resources/images/testmonial2.jpg') }}"
                            name="Jenifer Williams"
                            occupation="Software Engineer" />

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
                        <x-testmonial-card
                            message="Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Quis voluptatem
                                        blanditiis aperiam tempore cupiditate
                                        quaerat deserunt sequi quae tempora
                                        architecto Quis voluptatem."
                            image="{{ Vite::asset('resources/images/testmonial1.jpg') }}"
                            name="Christiana"
                            occupation="Marketting Manager" />
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
                        <x-testmonial-card
                            message="Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Quis voluptatem
                                        blanditiis aperiam tempore cupiditate
                                        quaerat deserunt sequi quae tempora
                                        architecto Quis voluptatem."
                            image="{{ Vite::asset('resources/images/testmonial3.jpg') }}"
                            name="Sabrina"
                            occupation="UI Designer" />
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
                        <x-testmonial-card
                            message="Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Quis voluptatem
                                        blanditiis aperiam tempore cupiditate
                                        quaerat deserunt sequi quae tempora
                                        architecto Quis voluptatem."
                            image="{{ Vite::asset('resources/images/testmonial4.jpg') }}"
                            name="Maxwell Antman"
                            occupation="Product Lead" />
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

        <section class="w-full py-20 px-8 flex justify-center bg-slate-200">
            <div class="md:max-w-screen-lg lg:max-w-screen-lg md:w-full">
                <h1 class="py-10 text-4xl font-bold text-center">Contact
                    Details
                </h1>
                <form action="">
                    <div
                        class="flex flex-col justify-center items-center md:flex-row  md:bg-white">
                        <div
                            class="flex flex-col w-full md:w-1/2 md:px-8 md:py-4">
                            <h2
                                class="hidden text-2xl my-4 text-start md:block">
                                Visit Us</h2>
                            <div>
                                <div class="flex justify-center flex-col">
                                    <div class="flex items-center gap-2">
                                        <span><x-location /></span>
                                        <span>203 Fake St. Mountain View, San
                                            Francisco,
                                            California, USA</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span><x-call /></span>
                                        <span>+2 392 3929 210</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span><x-email /></span>
                                        <span>info@yourdomain.com</span>
                                    </div>
                                </div>
                                <div
                                    class="border-t border-sky-700 h-0 w-full mx-4 my-4">
                                </div>
                                <div
                                    class="flex items-center justify-around gap-4">
                                    <div
                                        class="flex justify-center items-center flex-col">
                                        <h2 class="text-2xl mb-4 text-start">
                                            Opening Hours</h2>
                                        <span>Monday - Friday</span>
                                        <span>9:00AM - 5:00PM</span>
                                        <span>Saturday - Sunday</span>
                                        <span>On Call 24/7</span>
                                    </div>
                                    <div>
                                        <div class="flex items-center gap-2">
                                            <span><x-google /></span>
                                            <div>
                                                <span class="font-bold">Google
                                                    rating</span>
                                                <div
                                                    class="flex items-center gap-2">
                                                    <span
                                                        class="font-bold">5.0</span>
                                                    <div class="flex">
                                                        <span><x-stars /></span>
                                                        <span><x-stars /></span>
                                                        <span><x-stars /></span>
                                                        <span><x-stars /></span>
                                                        <span><x-stars /></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex justify-center items-center md:w-1/2 w-full h-96 md:h-full">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7967.519440298085!2d101.70672824019988!3d3.1579277498523513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc37d12d669c1f%3A0x9e3afdd17c8a9056!2sPetronas%20Twin%20Towers!5e0!3m2!1sen!2s!4v1709824163380!5m2!1sen!2s"
                                class="w-[300px] h-[300px] md:w-full md:h-96"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <footer class="bg-[#e0e0e0] text-black px-8 py-20  w-full">
        <div class="lg:flex md:justify-center">
            <div class="md:flex md:justify-around">
                <div class="md:w-1/2 px-4">
                    <div class="flex items-center gap-2 my-4">
                        <img src="{{ Vite::asset('/resources/svgs/logo.svg') }}"
                            class=" w-12 mr-2 group-hover:animate-spin"
                            alt="Logo">
                        <h1 class="text-xl font-bold">
                            Aone Support Services
                        </h1>
                    </div>
                    <span class="mb-4">Far far away, behind the word
                        mountains, far from the
                        countries.</span>
                    <div class="flex justify-center items-center gap-4 my-4">
                        <div
                            class="flex items-center justify-center h-12 w-12 rounded-md bg-sky-700">
                            <x-twitter />
                        </div>
                        <div
                            class="flex items-center justify-center h-12 w-12 rounded-md bg-sky-700">
                            <x-instagram />
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 px-4">
                    <h3 class="text-xl font-bold mb-2 mt-4">Services</h3>
                    <div>
                        <li class="list-none"><a
                                href=""></a>Transportation Assistance
                        </li>
                        <li class="list-none"><a
                                href=""></a>Accommodation Support</li>
                        <li class="list-none"><a href=""></a>In-Home
                            Care</li>
                        <li class="list-none"><a href=""></a>Support
                            Coordination</li>
                        <li class="list-none"><a href=""></a>Daily
                            Tasks Assistance</li>
                        <li class="list-none"><a href=""></a>Social
                            Engagement Programs</li>
                        <li class="list-none"><a
                                href=""></a>Transportation Assistance
                        </li>
                    </div>
                </div>
                <div class="md:w-1/2 px-4">
                    <h3 class="text-xl font-bold mb-2 mt-4">Links</h3>
                    <div>
                        <li class="list-none">Home</li>
                        <li class="list-none">Abou Us</li>
                        <li class="list-none">Services</li>
                        <li class="list-none">Testmonials</li>
                        <li class="list-none">Contact Us</li>
                        <li class="list-none">Book an Appointment</li>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="w-full bg-sky-700"><p class="text-center text-white">
            &copy; 2024 Aone. All rights reserved.
        </p> </div> --}}

    </footer>

</body>

</html>
