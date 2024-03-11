<header x-cloak class="lg:h-20 lg:w-full z-50 lg:flex lg:justify-center sticky top-0 shadow bg-white" x-data="{ isMenuOpen: false }">
    <nav class="w-full p-4 px-8 flex flex-col lg:flex-row items-center justify-between flex-nowrap bg-slate-200 lg:z-10">
        <div class="flex justify-between w-full">
            <a class="flex items-center group" href="/">
                <img src="{{ Vite::asset('/resources/svgs/logo.svg') }}" class="w-12 mr-2 group-hover:animate-spin" alt="Logo">
                <h1 class="text-lg font-bold ml-1 md:hidden">Aone</h1>
                <h1 class="text-xl font-bold hidden md:block">{{ config('app.name') }}</h1>
            </a>
            <div class="lg:hidden">
                <label class="btn btn-circle swap swap-rotate bg-slate-200">
                    <!-- this hidden checkbox controls the state -->
                    <input type="checkbox" id="menuToggle" @click="isMenuOpen = !isMenuOpen" />
                    <!-- hamburger icon -->
                    <svg class="swap-off fill-current" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512">
                        <path d="M64,384H448V341.33H64Zm0-106.67H448V234.67H64ZM64,128v42.67H448V128Z" />
                    </svg>
                    <!-- close icon -->
                    <svg class="swap-on fill-current" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512">
                        <polygon points="400 145.49 366.51 112 256 222.51 145.49 112 112 145.49 222.51 256 112 366.51 145.49 400 256 289.49 366.51 400 400 366.51 289.49 256 400 145.49" />
                    </svg>
                </label>
            </div>
        </div>
        <ul id="menuExpand" :class="{ 'hidden lg:flex': !isMenuOpen }" class="basis-full w-full mt-8 lg:mt-0 gap-4 lg:items-center lg:basis-0 flex-col lg:flex-row lg:w-full">
            <li class="lg:w-full"><a href="#heroImg" class="lg:w-full hover:text-sky-700 transition-all">Home</a></li>
            <li class="lg:w-full"><a href="#aboutUs" class="lg:w-full whitespace-nowrap hover:text-sky-700 transition-all">About Us</a></li>
            <li class="lg:w-full"><a href="#servicesWeOffer" class="hover:text-sky-700 transition-all">Services</a></li>
            <li class="lg:w-full"><a href="#contactDetails" class="hover:text-sky-700 whitespace-nowrap transition-all">Contact Us</a></li>
            <li class="lg:w-full"><a href="#testmonials" class="hover:text-sky-700 transition-all">Testimonials</a></li>
            <li x-on:click="is_modal_open = true" class="py-2 lg:mt-0 px-5 mt-2 cursor-pointer bg-sky-700 rounded-md w-full text-white">
                <span class="transition-all whitespace-nowrap">Book an Appointment</span>
            </li>
        </ul>
    </nav>
</header>