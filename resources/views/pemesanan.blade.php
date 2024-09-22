<x-layout :title="$title" :activePage="$activePage">
    @section('page')
        {{-- Start header sebagai background navbar --}}
        <header class="bg-slate-600 text-center pb-[4.5em] md:pb-[4.75em]">
        </header>
        {{-- Start header sebagai background navbar --}}

        <main class="bg-black">
            <div id="animation-carousel" class="relative w-full" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden md:h-96 lg:h-[34em] opacity-90">
                    <!-- Item 1 -->
                    <div class="hidden duration-200 ease-linear" data-carousel-item>
                        <img src="images/slide1.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-200 ease-linear" data-carousel-item="active">
                        <img src="images/slide2.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-200 ease-linear" data-carousel-item>
                        <img src="images/slide3.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-yellow-400/30
                        group-focus:ring-4 group-focus:ring-yellow-400 group-focus:outline-none">
                        <svg class="w-4 h-4 text-yellow-400 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-yellow-400/30
                        group-focus:ring-4 group-focus:ring-yellow-400 group-focus:outline-none">
                        <svg class="w-4 h-4 text-yellow-400 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </main>

        <section class="px-4 font-poppins bg-slate-100 py-10 lg:px-32">
            <hr class="h-[2px] mb-3 border border-gray-900">
            <h1 class="font-semibold text-2xl uppercase mb-4">Daftar Menu</h1>

            <div class="grid grid-cols-1 gap-y-10 md:grid-cols-2 md:gap-x-8 lg:grid-cols-3">
                @if ($menuItems->isEmpty())
                    <p>Tidak ada data menu tersedia.</p>
                @else
                    @foreach ($menuItems as $item)
                        <div>
                            <div class="relative group">
                                <img src="{{ asset('images/' . $item->photo) }}" alt="{{ $item->name }}"
                                    class="w-full h-auto">
                                <div
                                    class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 hover:opacity-100 transition-opacity duration-300">
                                    <a href="{{ route('menu.show', $item->slug) }}"
                                        class="px-4 py-2 font-semibold text-slate-100 ring-1 ring-yellow-400 bg-transparent rounded hover:bg-yellow-400 duration-300">Lihat
                                        Detail</a>

                                </div>
                            </div>
                            <div class="mt-3">
                                <h1 class="text-2xl font-medium uppercase">{{ $item->name }}</h1>
                                <div class="flex items-center gap-x-2">
                                    <h1 class="text-xl font-medium text-yellow-400">Rp
                                        {{ number_format($item->price, 0, ',', '.') }}</h1>
                                    <h2 class="text-sm line-through">Rp30.000,-</h2>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

            <div class="pt-10 pb-10 text-center">
                <div class="flex items-center justify-center mb-2">
                    <svg class="w-10 h-10 text-yellow-400 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                    </svg>
                    <svg class="w-10 h-10 text-yellow-400 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                    </svg>
                    <svg class="w-10 h-10 text-yellow-400 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                    </svg>
                    <svg class="w-10 h-10 text-yellow-400 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                    </svg>
                    <svg class="w-10 h-10 text-yellow-400 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                    </svg>
                    <p class="ms-1 text-md font-medium text-gray-500">4.80</p>
                    <p class="ms-1 text-md font-medium text-gray-500">dari</p>
                    <p class="ms-1 text-md font-medium text-gray-500">5</p>
                </div>
                <p class="text-sm font-medium text-gray-500">100+ Rating Pelanggan</p>
                <div class="flex items-center justify-center mt-4">
                    <a href="#" class="text-sm font-medium text-blue-600 hover:underline">5 star</a>
                    <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded">
                        <div class="h-5 bg-yellow-300 rounded" style="width: 95%"></div>
                    </div>
                    <span class="text-sm font-medium text-gray-500">95%</span>
                </div>
                <div class="flex items-center justify-center mt-4">
                    <a href="#" class="text-sm font-medium text-blue-600 hover:underline">4 star</a>
                    <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded">
                        <div class="h-5 bg-yellow-300 rounded" style="width: 5%"></div>
                    </div>
                    <span class="text-sm font-medium text-gray-500">5%</span>
                </div>
                <div class="flex items-center justify-center mt-4">
                    <a href="#" class="text-sm font-medium text-blue-600 hover:underline">3 star</a>
                    <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded">
                        <div class="h-5 bg-yellow-300 rounded" style="width: 0%"></div>
                    </div>
                    <span class="text-sm font-medium text-gray-500">0%</span>
                </div>
                <div class="flex items-center justify-center mt-4">
                    <a href="#" class="text-sm font-medium text-blue-600 hover:underline">2 star</a>
                    <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded">
                        <div class="h-5 bg-yellow-300 rounded" style="width: 0%"></div>
                    </div>
                    <span class="text-sm font-medium text-gray-500">0%</span>
                </div>
                <div class="flex items-center justify-center mt-4">
                    <a href="#" class="text-sm font-medium text-blue-600 hover:underline">1 star</a>
                    <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded">
                        <div class="h-5 bg-yellow-300 rounded" style="width: 0%"></div>
                    </div>
                    <span class="text-sm font-medium text-gray-500">0%</span>
                </div>
            </div>
            <hr class="h-[2px] mb-6 border border-gray-900">

            <div class="grid grid-cols-1 gap-y-6 md:grid-cols-2 md:gap-x-6 md:gap-y-0">
                <div class="bg-green-500">
                    <img src="" alt="" class="w-full h-[12em] rounded-lg">
                </div>
                <div class="bg-green-500">
                    <img src="" alt="" class="w-full h-[12em] rounded-lg">
                </div>
            </div>
        </section>
    @endsection
</x-layout>
