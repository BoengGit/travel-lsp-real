<x-master_home-layout>
    {{-- CTA HERO CUY --}}

    <section class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                    Kuy Jelajahi <br> Destinasi Impian Anda</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    Kami Siap Membantu Anda Memilih Paket Liburan yang Tepat Dengan Berbagai Package Travel yang Bagus
                </p>
                <a href="{{ route('login') }}"
                    class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    Gass Travel
                </a>
                <a href="#travel-packages"
                    class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    Lihat-lihat
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="https://images.unsplash.com/photo-1551008475-4533d141425b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80"
                    alt="mockup" class="rounded-lg">
            </div>
        </div>
    </section>

    {{-- CARD CUY --}}
    <section class="bg-white dark:bg-neutral-800 py-12" id="travel-packages">

        <h2
            class="mb-8 lg:mb-16 text-3xl font-extrabold tracking-tight leading-tight text-center text-gray-900 dark:text-white md:text-4xl">
            Travel Package</h2>

        <div class="flex py-10 items-center justify-center ">

            <div class="grid grid-cols-1 gap-20 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($items as $item)
                    <div
                        class="group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
                        <div class="h-96 w-72">
                            <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                                src="{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}"
                                alt="" />
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                        </div>
                        <div
                            class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                            <h1 class="font-dmserif text-3xl font-bold text-white">{{ $item->title }}</h1>
                            <p
                                class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                {{ $item->about }}
                            </p>
                            <a href="{{ route('detail', $item->slug) }}"
                                class="rounded-full bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">See
                                More</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-master_home-layout>
