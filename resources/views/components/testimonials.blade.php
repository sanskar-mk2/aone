<section id="Testmonials"
    class="w-full py-20 px-8 flex justify-center bg-white">
    <div
        class="flex flex-col items-center max-w-md md:max-w-screen-lg lg:max-w-screen-lg ">
        <h1 class="text-4xl font-bold mb-10">Happy Customers</h1>

        <div id="testimonial-slider"
            x-data
            class="keen-slider max-w-xs lg:max-w-full relative rounded">
            <div
                class="keen-slider__slide bg-gray-100 rounded-lg p-6 px-12 shadow-md">
                <div class="flex items-center mb-4">
                    <div class="w-16 h-16 rounded-full overflow-hidden mr-4">
                        <img src="{{ Vite::asset('resources/images/testmonial2.jpg') }}"
                            alt="Testimonial"
                            class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h3 class="text-xl font-bold">Sarah Johnson</h3>
                        <p class="text-gray-600">NDIS Participant</p>
                    </div>
                </div>
                <p class="text-gray-700">"The NDIS support services provided
                    by
                    this company have been life-changing for me. Their
                    dedicated
                    staff and personalized approach have enabled me to
                    achieve
                    my goals and live more independently."</p>
            </div>
            <div
                class="keen-slider__slide bg-gray-100 rounded-lg p-6 px-12 shadow-md">
                <div class="flex items-center mb-4">
                    <div class="w-16 h-16 rounded-full overflow-hidden mr-4">
                        <img src="{{ Vite::asset('resources/images/testmonial1.jpg') }}"
                            alt="Testimonial"
                            class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h3 class="text-xl font-bold">Michael Thompson</h3>
                        <p class="text-gray-600">Support Coordinator</p>
                    </div>
                </div>
                <p class="text-gray-700">"As a support coordinator, I have
                    witnessed firsthand the positive impact this company has
                    had
                    on the lives of NDIS participants. Their commitment to
                    delivering high-quality services and their collaborative
                    approach make them an invaluable partner."</p>
            </div>
            <div
                class="keen-slider__slide bg-gray-100 rounded-lg p-6 px-12 shadow-md">
                <div class="flex items-center mb-4">
                    <div class="w-16 h-16 rounded-full overflow-hidden mr-4">
                        <img src="{{ Vite::asset('resources/images/testmonial3.jpg') }}"
                            alt="Testimonial"
                            class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h3 class="text-xl font-bold">Emily Davis</h3>
                        <p class="text-gray-600">Family Member</p>
                    </div>
                </div>
                <p class="text-gray-700">"The support and assistance
                    provided by
                    this company have been incredible. They have helped us
                    navigate the NDIS system and ensure that our loved one
                    receives the best possible care. We are grateful for
                    their
                    dedication and compassion."</p>
            </div>
            <div
                class="keen-slider__slide  bg-gray-100 rounded-lg p-6 px-12 shadow-md">
                <div class="flex items-center mb-4">
                    <div class="w-16 h-16 rounded-full overflow-hidden mr-4">
                        <img src="{{ Vite::asset('resources/images/testmonial4.jpg') }}"
                            alt="Testimonial"
                            class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h3 class="text-xl font-bold">David Wilson</h3>
                        <p class="text-gray-600">NDIS Participant</p>
                    </div>
                </div>
                <p class="text-gray-700">"I have been receiving NDIS support
                    services from this company for the past year, and I
                    couldn't
                    be happier with the care and support I have received.
                    The
                    staff are compassionate, professional, and always go
                    above
                    and beyond to meet my needs."</p>
            </div>
            <div
                class="absolute flex w-32 justify-start pl-4 items-center bg-gradient-to-r from-slate-200/50 to-slate-200/0 left-0 top-0 h-full z-40">
                <p>
                    <x-arrow x-on:click="testimonial_keen.prev();" />
                </p>
            </div>
            <div
                class="absolute flex w-32 justify-end pr-4 bg-gradient-to-l from-slate-200/50 to-slate-200/0 items-center right-0 top-0 h-full z-40">
                <p>
                    <x-arrow x-on:click="testimonial_keen.next();"
                        class="rotate-180" />
                </p>
            </div>
        </div>


    </div>
</section>
