<div class="w-3/5 mx-auto my-0">
    <div class="p-4 flex flex-col gap-2 shadow-gray-500/80">
        <div class="bg-slate-200 p-8 relative text-lg/8 text-gray-600">
            <p>{{ $message }}</p>
        </div>
        <div class="bg-white absolute -top-5 left-64 rounded-full">
            <x-quote />
        </div>
    </div>
    <div class="flex items-center gap-5 ml-6">
        <figure class="">
            <img src="{{ $image }}"
                class="w-24 h-24 object-cover rounded-full"
                alt="">
        </figure>
        <div>
            <span class="text-xl font-bold block">{{ $name }}</span>
            <span class="text-sky-700">{{ $occupation }}</span>
        </div>
    </div>
</div>
