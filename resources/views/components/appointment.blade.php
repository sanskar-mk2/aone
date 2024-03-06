<div class="w-screen h-screen fixed bg-black/80 top-0 left-0 z-50 flex justify-center items-center"
    x-cloak
    x-show="is_modal_open">
    <section id="appointmentForm"
        class="relative max-w-screen-xl bg-base-200 px-20 min-w-[300px] py-20 flex justify-center">
        <div x-on:click="is_modal_open=false" class="cursor-pointer absolute right-2 top-2">X</div>
        <div class="w-full">
            <h2 class="text-3xl font-bold mb-8">Book Your Appointment
            </h2>
            <form action="">
                <div class=" ">
                    <div class=" w-full mb-4">
                        <input type="text"
                            name=""
                            id=""
                            class="w-full px-4 py-3 border border-gray-400 rounded-md focus:ring-0"
                            placeholder="First Name">
                    </div>

                    <div class=" w-full mb-4">
                        <input type="text"
                            name=""
                            id=""
                            class="w-full px-4 py-3 border border-gray-400 rounded-md focus:ring-0"
                            placeholder="Last Name">
                    </div>
                    <div class=" w-full mb-4">
                        <select name=""
                            class="w-full px-4 py-3 border border-gray-400 rounded-md focus:ring-0"
                            id="">
                            <option value=""
                                seleted>Select Your Services</option>
                            <option value="">Transportation
                                Assistance</option>
                            <option value="">Accommodation Support
                            </option>
                            <option value="">In-Home Care</option>
                            <option value="">Support Coordination
                            </option>
                            <option value="">Daily Tasks
                                Assistance
                            </option>
                            <option value="">Social Engagement
                                Programs</option>
                        </select>
                    </div>
                    <div class=" w-full mb-4">
                        <input type="text"
                            name=""
                            id=""
                            class="w-full px-4 py-3 border border-gray-400 rounded-md focus:ring-0"
                            placeholder="Phone">
                    </div>
                    <div class=" w-full mb-4">
                        <input type="date"
                            name=""
                            id=""
                            class="w-full px-4 py-3 border border-gray-400 rounded-md focus:ring-0"
                            placeholder="Date">
                    </div>
                    <div class=" w-full mb-4">
                        <input type="time"
                            name=""
                            id=""
                            class="w-full px-4 py-3 border border-gray-400 rounded-md focus:ring-0"
                            placeholder="Time">
                    </div>
                    <div class=" w-full mb-4">
                        <textarea type="text"
                            name=""
                            id=""
                            class="w-full px-4 py-3 border border-gray-400 rounded-md focus:ring-0"
                            placeholder="Message">
                            </textarea>
                    </div>
                    <div class=" w-full mb-4">
                        <button type="submit"
                            name=""
                            id=""
                            class="w-full px-4 py-3 bg-sky-700 text-white rounded-md"
                            placeholder="Message"> Appointment
                        </button>
                    </div>
            </form>
        </div>
    </section>
</div>
