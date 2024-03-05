<div
    class="group bg-white p-8 flex flex-col justify-center items-center gap-8 rounded-md hover:bg-sky-700 hover:text-white transition-all ">
    <div class="flex flex-col justify-center items-center">
        {{ $slot }}
        <div class="border-t-4 border-slate-200 h-0 w-4/5 mx-4">
        </div>
    </div>
    <div class="text-center hover:text-white">
        <h3 class="text-xl font-semibold lg:text-2xl">{{ $title }}
        </h3>
        <p class="text-xs/5 mt-4 md:text-base"> {{ $description }}</p>
    </div>
</div>
