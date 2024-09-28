<x-layout :title="$title" :activePage="$activePage">
    @section('page')
        {{-- Start Main --}}
        <main class="relative h-[60vh] bg-cover bg-center overflow-x-hidden bg-catering md:h-[75vh]">
            <!-- Overlay hitam dengan opacity -->
            <div class="absolute inset-0 bg-black opacity-40"></div>
            <!-- Konten di atas background -->
            <div class="relative z-10 flex items-center justify-center h-full md:pt-12">
                <div class="text-center max-w-2xl -space-y-2 w-full px-5 md:pl-10 md:-space-y-1 lg:-space-y-4 lg:pl-7">
                    <h1 class="text-6xl text-yellow-400 font-medium tracking-tight mb-2 font-euphoria lg:mb-5 md:text-8xl">
                        Berbagai</h1>
                    <p class="text-xl font-poppins font-semibold uppercase text-slate-100 md:text-5xl">Layanan</p>
                </div>
            </div>
        </main>
        {{-- End Main --}}

        {{-- Start Section I --}}
        <section class="bg-slate-100 pb-10 pt-14">
            <div class="grid grid-cols-1 p-6 gap-y-6 md:grid-cols-2 md:gap-x-6 lg:px-32">
                <div
                    class="p-10 bg-slate-100 border border-gray-200 rounded-lg shadow-md shadow-yellow-500 flex flex-col justify-center h-full">
                    <div class="text-center space-y-3 px-5">
                        <h5 class="-mb-4 text-3xl font-euphoria tracking-tight text-gray-900 lg:text-4xl">
                            Gratis Pengantaran
                        </h5>
                        <h1 class="text-3xl mb-3 font-bold uppercase text-gray-700">Makanan</h1>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-7 mx-auto">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                        </svg>
                        <div class="text-lg space-y-2 font-poppins">
                            <div>Restoran kami menawarkan gratis pengantaran makanan lezat dan segar langsung ke pintu
                                rumah Anda.</div>
                            <div>
                                <a href="/pemesanan" class="underline text-yellow-400 font-semibold">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 h-full md:gap-6">
                    <img class="rounded-lg object-cover w-full h-full" src="images/cateringphoto2.jpg" alt="">
                    <img class="rounded-lg object-cover w-full h-full" src="images/cateringphoto2.jpg" alt="">
                    <img class="rounded-lg object-cover w-full h-full" src="images/cateringphoto2.jpg" alt="">
                    <img class="rounded-lg object-cover w-full h-full" src="images/cateringphoto2.jpg" alt="">
                </div>
            </div>

            <div class="relative z-10 flex items-center justify-center h-full lg:h-auto font-poppins">
                <div class="text-center max-w-7xl px-4 md:px-12 lg:py-16">
                    <div
                        class="mt-8 mb-8 grid grid-cols-1 gap-14 md:grid-cols-4 md:grid-rows-1 lg:gap-y-20 lg:gap-x-36 lg:my-0">
                        <div class="space-y-2">
                            <h1 class="text-6xl text-yellow-400 font-semibold counter" data-target="4">0</h1>
                            <p class="text-gray-900 uppercase font-semibold whitespace-nowrap">Tahun Beroperasi</p>
                        </div>
                        <div class="space-y-2">
                            <h1 class="text-6xl text-yellow-400 font-semibold counter" data-target="12">0</h1>
                            <p class="text-gray-900 uppercase font-semibold whitespace-nowrap">Penghargaan diraih</p>
                        </div>
                        <div class="space-y-2">
                            <h1 class="text-6xl text-yellow-400 font-semibold counter" data-target="115">0</h1>
                            <p class="text-gray-900 uppercase font-semibold whitespace-nowrap">Jenis Menu</p>
                        </div>
                        <div class="space-y-2">
                            <h1 class="text-6xl text-yellow-400 font-semibold counter" data-target="7" x>0</h1>
                            <p class="text-gray-900 uppercase font-semibold whitespace-nowrap">Cabang Catering</p>
                        </div>
                    </div>
                </div>
        </section>
        {{-- End Section I --}}

        {{-- Start Section II --}}
        <section class="relative bg-catering2 bg-cover bg-center bg-fixed lg:h-auto">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="relative z-10 flex items-center justify-center h-full lg:h-auto">
                <div class="text-center px-14 w-full bg-black bg-opacity-80 py-10 font-poppins space-y-3 lg:px-8 lg:py-16">
                    <h2 class="-mb-4 text-3xl font-euphoria text-yellow-400">Acara</h2>
                    <h1 class="font-semibold uppercase text-slate-100 text-3xl">Catering</h1>
                    <div class="text-lg space-y-3">
                        <div class="text-slate-100">Nikmati hidangan lezat untuk setiap acara spesial Anda dengan <br
                                class="hidden lg:block"> layanan
                            catering profesional, berkualitas, dan beragam menu.</div>
                        <div>
                            <a href="/pemesanan" class="text-yellow-400 underline font-semibold">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Section II --}}

        {{-- Start Section III --}}
        <section class="bg-slate-100 pb-10 pt-14">
            <div class="grid grid-cols-1 p-6 gap-y-6 md:grid-cols-2 md:gap-x-6 lg:px-32">
                <div class="grid grid-cols-2 gap-4 h-full md:gap-6">
                    <img class="rounded-lg object-cover w-full h-full" src="images/chef1.jpg" alt="Chef 1">
                    <img class="rounded-lg object-cover w-full h-full" src="images/chef2.jpg" alt="Chef 2">
                </div>

                <div
                    class="p-10 bg-slate-100 border border-gray-200 rounded-lg shadow-md shadow-yellow-500 flex flex-col justify-center h-full">

                    <div class="text-center space-y-3 px-5">
                        <h5 class="-mb-4 text-3xl font-euphoria tracking-tight text-gray-900 lg:text-4xl">
                            Karya dari
                        </h5>
                        <h1 class="text-3xl mb-3 font-bold uppercase text-gray-700">KOKI TERBAIK</h1>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-7 mx-auto">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                        </svg>
                        <div class="text-lg space-y-2 font-poppins">
                            <div>Koki kami menciptakan hidangan yang menggugah selera dengan bahan berkualitas, inovasi
                                unik, dan presentasi yang memukau.</div>
                            <div>
                                <a href="/pemesanan" class="underline text-yellow-400 font-semibold">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Section III --}}
    @endsection
</x-layout>
