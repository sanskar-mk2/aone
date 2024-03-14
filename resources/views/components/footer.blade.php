<footer class="bg-[#e0e0e0] text-black px-8 py-20  w-full">
    <div class="lg:flex md:justify-center">
        <div class="md:flex md:justify-around">
            <div class="md:w-1/2 px-4">
                <div class="flex items-center gap-2 my-4">
                    <img src="{{ Vite::asset('/resources/svgs/logo.svg') }}"
                        class=" w-12 mr-2 group-hover:animate-spin"
                        alt="Logo">
                    <h1 class="text-xl font-bold ">
                        Aone Support Services
                    </h1>
                </div>
                <span class="mb-4">Aone support services is your one stop
                    destination for all your support needs.</span>
                <div class="flex justify-center items-center  gap-4 my-4">
                    <div
                        class="flex items-center justify-center h-12 w-12 rounded-md bg-sky-700">
                        <x-twitter />
                    </div>
                    <div
                        class="flex items-center justify-center h-12 w-12 rounded-md bg-sky-700">
                        <x-instagram />
                    </div>
                    <div
                        class="flex items-center justify-center h-12 w-12 rounded-md bg-sky-700">
                        <x-facebook />
                    </div>
                </div>
            </div>
            <div class="md:w-1/2 px-4">
                <h3 class="text-xl font-bold mb-2 mt-4">Services</h3>
                <div>
                    <li class="list-none"><a href=""></a>Transportation
                        Assistance
                    </li>
                    <li class="list-none">Accommodation
                        Support</li>
                    <li class="list-none">In-Home
                        Care</li>
                    <li class="list-none">Support
                        Coordination</li>
                    <li class="list-none">Daily
                        Tasks Assistance</li>
                    <li class="list-none">Social
                        Engagement Programs</li>
                    <li class="list-none">Transportation
                        Assistance
                    </li>
                </div>
            </div>
            <div class="md:w-1/2 px-4">
                <h3 class="text-xl font-bold mb-2 mt-4">Links</h3>
                <div>
                    <li class="list-none hover:text-sky-700 transition-all"><a
                            href="#heroImg">Home</a></li>
                    <li class="list-none hover:text-sky-700 transition-all"><a
                            href="#aboutUs">About Us</a></li>
                    <li class="list-none hover:text-sky-700 transition-all"><a
                            href="#servicesWeOffer">Services</a></li>
                    <li class="list-none hover:text-sky-700 transition-all"><a
                            href="#testmonials">Testmonials</a></li>
                    <li class="list-none hover:text-sky-700 transition-all"><a
                            href="#contactDetails">Contact Us</a></li>
                    <li x-on:click="is_modal_open = true"
                        class="list-none cursor-pointer hover:text-sky-700 transition-all">
                        Book an Appointment</li>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="w-full bg-sky-700"><p class="text-center text-white">
            &copy; 2024 Aone. All rights reserved.
        </p> </div> --}}

</footer>
