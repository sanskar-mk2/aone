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
