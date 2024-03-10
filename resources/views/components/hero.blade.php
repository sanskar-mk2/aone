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
