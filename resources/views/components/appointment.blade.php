<div class="w-screen h-screen fixed bg-black/80 top-0 left-0 z-50 flex justify-center items-center"
    x-cloak
    x-show="is_modal_open">
    <section id="appointmentForm"
        class="relative h-screen lg:h-3/4 max-w-screen-xl bg-base-200 px-12 md:px-20 min-w-72 py-20 flex justify-center overflow-y-auto">

        <svg class="swap-on fill-current absolute right-4 top-8 cursor-pointer"
            x-on:click="is_modal_open=false"
            xmlns="http://www.w3.org/2000/svg"
            width="32"
            height="32"
            viewBox="0 0 512 512">
            <polygon
                points="400 145.49 366.51 112 256 222.51 145.49 112 112 145.49 222.51 256 112 366.51 145.49 400 256 289.49 366.51 400 400 366.51 289.49 256 400 145.49" />
        </svg>
        <div class="w-full">
            <h2 class="text-3xl font-bold mb-8 text-center">Book Your
                Appointment
            </h2>
            <form action="{{ route('form.submit') }}"
                method="POST">
                @csrf
                <div class="w-full">
                    <div class=" w-full mb-4">
                        <label for="name">
                            <input type="text"
                                name="name"
                                id="name"
                                value="{{ old('name') }}"
                                class="w-full px-4 py-3 border border-gray-400 rounded-md focus:ring-0"
                                requried
                                placeholder="Full Name">
                            <span
                                class="text-sm text-red-600 mt-2">{{ $errors->first('name') }}</span>
                        </label>
                    </div>

                    <div class=" w-full mb-4">
                        <label for="services">
                            <select name="services"
                                value="{{ old('services') }}"
                                requried
                                class="w-full px-4 py-3 border border-gray-400 rounded-md focus:ring-0"
                                id="services">
                                <option value=""
                                    seleted>Select Your Services</option>
                                <option value="Transportation Assistance"
                                    @selected(old('services') == 'Transportation Assistance')>
                                    Transportation
                                    Assistance</option>
                                <option value="Accommodation Support"
                                    @selected(old('services') == 'Accommodation Support')>
                                    Accommodation Support
                                </option>
                                <option value="In-Home Care"
                                    @selected(old('services') == 'In-Home Care')>In-Home Care
                                </option>
                                <option value="Support Coordination"
                                    @selected(old('services') == 'Support Coordination')>Support
                                    Coordination
                                </option>
                                <option value="Daily Tasks Assistance"
                                    @selected(old('services') == 'Daily Tasks Assistance')>Daily
                                    Tasks
                                    Assistance
                                </option>
                                <option value="Social Engagement Programs"
                                    @selected(old('services') == 'Social Engagement Programs')>
                                    Social Engagement
                                    Programs</option>
                            </select>
                            <span
                                class="text-sm text-red-600 mt-2">{{ $errors->first('services') }}</span>
                        </label>
                    </div>
                    <div class=" w-full mb-4">
                        <label for="phone">
                            <input type="tel"
                                name="phone"
                                id="phone"
                                value="{{ old('phone') }}"
                                requried
                                class="w-full px-4 py-3 border border-gray-400 rounded-md focus:ring-0"
                                placeholder="Phone">
                            <span
                                class="text-sm text-red-600 mt-2">{{ $errors->first('phone') }}</span>
                        </label>
                    </div>
                    <div class=" w-full mb-4">
                        <label for="appointmentDate">
                            <input type="date"
                                name="appointmentDate"
                                id="appointmentDate"
                                value="{{ old('appointmentDate') }}"
                                requried
                                class="w-full px-4 py-3 border border-gray-400 rounded-md focus:ring-0"
                                placeholder="Select Date">

                            <span
                                class="text-sm text-red-600 mt-2">{{ $errors->first('appointmentDate') }}</span>
                        </label>
                    </div>
                    <div class=" w-full mb-4">
                        <label for="appointmentTime">
                            <input type="time"
                                name="appointmentTime"
                                id="appointmentTime"
                                value="{{ old('appointmentTime') }}"
                                requrieed
                                class="w-full px-4 py-3 border border-gray-400 rounded-md focus:ring-0"
                                placeholder="Select Time">
                            <span
                                class="text-sm text-red-600 mt-2">{{ $errors->first('appointmentTime') }}</span>
                        </label>
                    </div>
                    <div class=" w-full mb-4">
                        <label for="message">
                            <textarea type="text"
                                name="message"
                                id="message"
                                value="{{ old('message') }}"
                                requried
                                class="w-full px-4 py-3 border border-gray-400 rounded-md focus:ring-0"
                                placeholder="Type your Message..."></textarea>
                            <span
                                class="text-sm text-red-600 mt-2">{{ $errors->first('message') }}</span>
                        </label>
                    </div>
                    <div class=" w-full mb-4">
                        <label for="">
                            <button type="submit"
                                name=""
                                id=""
                                class="w-full px-4 py-3 bg-sky-700 text-white rounded-md">Submit
                            </button>
                        </label>
                    </div>
            </form>
        </div>
    </section>
</div>
