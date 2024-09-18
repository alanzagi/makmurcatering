<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Tailwind CSS --}}
    @vite('resources/css/app.css')
    <!-- Playfair Display Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet" />
    <!-- Cabin Display Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet" />
    {{-- Poppins Display Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    {{-- Euphoria Script Display Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Euphoria+Script&display=swap" rel="stylesheet">

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100..900;1,100..900&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Euphoria+Script&display=swap");


        .font-playfair {
            font-family: "Playfair Display", serif;
        }

        .font-cabin {
            font-family: "Cabin", sans-serif;
        }

        .font-poppins {
            font-family: "Poppins", sans-serif;
        }

        .font-roboto {
            font-family: "Roboto", sans-serif;
        }

        .font-euphoria {
            font-family: "Euphoria Script", cursive;
        }

        .bg-catering {
            background-image: url('{{ asset('images/cateringbackground.jpg') }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .bg-catering2 {
            background-image: url('{{ asset('images/cateringbackground2.jpg') }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .bg-catering3 {
            background-image: url('{{ asset('images/cateringbackground3.jpg') }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
    </style>
</head>

<body>
    {{-- Start Nav --}}
    <nav class="absolute top-0 left-0 w-full bg-black/50 z-50 font-poppins">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://instagram.com/alanzagi" class="flex items-center space-x-3 rtl:space-x-reverse"
                target="_blank">
                <span class="self-center text-2xl font-medium whitespace-nowrap text-yellow-400">M_Catering</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button data-collapse-toggle="navbar-cta" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-yellow-400 rounded-lg md:hidden hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-600"
                    aria-controls="navbar-cta" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center hidden w-full md:flex md:w-auto md:order-1 md:ml-auto" id="navbar-cta">
                <ul
                    class="flex flex-col text-xl font-medium p-4 md:p-0 mt-4 border border-gray-200 rounded-lg bg-slate-200 text-gray-900 md:space-x-4 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent md:text-white">
                    <li>
                        <a href="/"
                            class="block py-2 px-3 md:p-2 text-white rounded bg-yellow-400 hover:text-white hover:bg-yellow-400 md:hover:bg-transparent md:hover:text-yellow-400 md:transition-colors md:duration-500 md:ease-in-out md:text-lg md:bg-transparent md:text-yellow-400"
                            aria-current="page">Beranda</a>
                    </li>
                    <li>
                        <a href="/layanan"
                            class="block py-2 px-3 md:p-2 rounded hover:text-white hover:bg-yellow-400 md:hover:bg-transparent md:hover:text-yellow-400 md:transition-colors md:duration-500 md:ease-in-out md:text-lg md:bg-transparent">Layanan</a>
                    </li>
                    <li>
                        <a href="/pemesanan"
                            class="block py-2 px-3 md:p-2 rounded hover:text-white hover:bg-yellow-400 md:hover:bg-transparent md:hover:text-yellow-400 md:transition-colors md:duration-500 md:ease-in-out md:text-lg md:bg-transparent">Pemesanan</a>
                    </li>
                    <li>
                        <a href="/kontak"
                            class="block py-2 px-3 md:p-2 rounded hover:text-white hover:bg-yellow-400 md:hover:bg-transparent md:hover:text-yellow-400 md:transition-colors md:duration-500 md:ease-in-out md:text-lg md:bg-transparent">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- End Nav --}}

    {{-- Start Main --}}
    <main class="h-screen bg-catering font-poppins flex items-center">
        <div class="absolute inset-0 bg-black opacity-40 z-0"></div>
        <div class="relative text-white z-10 flex flex-col items-start pl-4">
            <h2 class="text-xl md:text-3xl">Selamat Datang Di</h2>
            <h1 class="text-3xl font-semibold text-yellow-400 md:text-5xl">Makmur Catering</h1>
            <p class="text-md md:text-lg">Menyediakan kebutuhan catering sejak 2010</p>
        </div>
    </main>
    {{-- End Main --}}

    {{-- Start Section I --}}
    <section class="bg-white font-poppins">
        <div class="px-10 py-8 text-center space-y-2 lg:pt-14">
            <p class="text-xl font-semibold uppercase">"kualitas menu terbaik <br>dengan harga yang
                terjangkau."</p>
            <h2 class="text-sm text-yellow-400 font-semibold uppercase">- Owner Kami Alan Zagi -</h2>
            <h1 class="text-4xl font-euphoria">Alan Zagi</h1>
        </div>

        <div class="px-6 grid grid-cols-1 gap-y-6 pb-10 md:grid-cols-3 md:gap-y-0 md:gap-x-6 lg:px-40 lg:pb-20">
            <div class="flex overflow-hidden">
                <img src="images/cateringbackground.jpg"
                    class="rounded-md object-cover w-full h-full transition-transform duration-300 hover:scale-110"
                    alt="Gambar Catering">
            </div>

            <div class="flex overflow-hidden">
                <img src="images/cateringbackground.jpg"
                    class="rounded-md object-cover w-full h-full transition-transform duration-300 hover:scale-110"
                    alt="Gambar Catering">
            </div>

            <div class="p-10 bg-white border border-gray-200 rounded-lg shadow flex flex-col justify-center">
                <div class="text-center space-y-3 px-5">
                    <h5 class="mb-2 text-2xl font-euphoria tracking-tight text-gray-900">
                        Mengenal
                    </h5>
                    <h1 class="text-3xl mb-3 font-bold uppercase text-gray-700">kisah kami</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-7 mx-auto">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                    </svg>
                    <p class="text-lg">Kami berkomitmen untuk menyajikan hidangan lezat, sehat, dan berkualitas tinggi
                        dengan layanan profesional untuk setiap kebutuhan Anda.</p>
                </div>
            </div>
        </div>

    </section>
    {{-- End Section I --}}

    {{-- Start Section II --}}
    <section class="bg-white font-poppins">
        <div class="relative bg-catering2">
            <div class="absolute inset-0 bg-black opacity-40 z-0"></div>
            <div class="relative p-20 text-white text-center z-10">
                <h1 class="font-euphoria text-5xl">Berbagai</h1>
                <h1 class="text-4xl font-semibold">Menu Favorit</h1>
            </div>
        </div>

        <div class="grid grid-cols-1 py-4 px-4 gap-y-8 pb-10 md:grid-cols-4 md:gap-y-8 md:gap-x-6 md:px-10 md:py-10">
            <div>
                <img src="images/cateringphoto.jpg" class="rounded-lg" alt="Catering Photo">
                <h1 class="text-xl font-semibold pt-2">Nama Menu</h1>
                <p class="text-sm">Bahan yang digunakan</p>
            </div>

            <div>
                <img src="images/cateringphoto.jpg" class="rounded-lg" alt="Catering Photo">
                <h1 class="text-xl font-semibold pt-2">Nama Menu</h1>
                <p class="text-sm">Bahan yang digunakan</p>
            </div>

            <div>
                <img src="images/cateringphoto.jpg" class="rounded-lg" alt="Catering Photo">
                <h1 class="text-xl font-semibold pt-2">Nama Menu</h1>
                <p class="text-sm">Bahan yang digunakan</p>
            </div>

            <div>
                <img src="images/cateringphoto.jpg" class="rounded-lg" alt="Catering Photo">
                <h1 class="text-xl font-semibold pt-2">Nama Menu</h1>
                <p class="text-sm">Bahan yang digunakan</p>
            </div>

            <div>
                <img src="images/cateringphoto.jpg" class="rounded-lg" alt="Catering Photo">
                <h1 class="text-xl font-semibold pt-2">Nama Menu</h1>
                <p class="text-sm">Bahan yang digunakan</p>
            </div>

            <div>
                <img src="images/cateringphoto.jpg" class="rounded-lg" alt="Catering Photo">
                <h1 class="text-xl font-semibold pt-2">Nama Menu</h1>
                <p class="text-sm">Bahan yang digunakan</p>
            </div>

            <div>
                <img src="images/cateringphoto.jpg" class="rounded-lg" alt="Catering Photo">
                <h1 class="text-xl font-semibold pt-2">Nama Menu</h1>
                <p class="text-sm">Bahan yang digunakan</p>
            </div>

            <div>
                <img src="images/cateringphoto.jpg" class="rounded-lg" alt="Catering Photo">
                <h1 class="text-xl font-semibold pt-2">Nama Menu</h1>
                <p class="text-sm">Bahan yang digunakan</p>
            </div>
        </div>
    </section>
    {{-- End Section II --}}

    {{-- Start Section III --}}
    <section class="bg-white font-poppins">
        <div class="relative bg-catering3">
            <div class="absolute inset-0 bg-black opacity-40 z-0"></div>
            <div class="relative p-20 text-white text-center z-10">
                <h1 class="font-euphoria text-5xl">Berbagai</h1>
                <h1 class="text-4xl font-semibold">Pengalaman Terbaik</h1>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-y-6 py-14">
            <div class="grid grid-cols-1 p-6 gap-y-6 md:grid-cols-2 md:gap-x-6 lg:p-32">
                <div class="grid grid-cols-2 gap-4 h-full md:gap-6">
                    <img class="rounded-lg object-cover w-full h-full" src="images/cateringphoto2.jpg"
                        alt="">
                    <img class="rounded-lg object-cover w-full h-full" src="images/cateringphoto2.jpg"
                        alt="">
                    <img class="rounded-lg object-cover w-full h-full" src="images/cateringphoto2.jpg"
                        alt="">
                    <img class="rounded-lg object-cover w-full h-full" src="images/cateringphoto2.jpg"
                        alt="">
                </div>

                <div
                    class="p-10 bg-white border border-gray-200 rounded-lg shadow-md shadow-yellow-500 flex flex-col justify-center h-full">
                    <div class="text-center space-y-3 px-5">
                        <h5 class="mb-2 text-2xl font-euphoria tracking-tight text-gray-900">
                            Pesan
                        </h5>
                        <h1 class="text-3xl mb-3 font-bold uppercase text-gray-700">menu kami</h1>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="h-7 mx-auto">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                        </svg>
                        <p class="text-lg">Kami berkomitmen untuk menyajikan hidangan lezat, sehat, dan berkualitas
                            tinggi
                            dengan layanan profesional untuk setiap kebutuhan Anda.</p>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 p-6 gap-y-6 md:grid-cols-2 md:gap-x-6 lg:p-32">
                <div
                    class="p-10 bg-white border border-gray-200 rounded-lg shadow-md shadow-yellow-500 flex flex-col justify-center h-full">
                    <div class="text-center space-y-3 px-5">
                        <h5 class="mb-2 text-2xl font-euphoria tracking-tight text-gray-900">
                            Pesan
                        </h5>
                        <h1 class="text-3xl mb-3 font-bold uppercase text-gray-700">menu kami</h1>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="h-7 mx-auto">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                        </svg>
                        <p class="text-lg">Kami berkomitmen untuk menyajikan hidangan lezat, sehat, dan berkualitas
                            tinggi
                            dengan layanan profesional untuk setiap kebutuhan Anda.</p>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 h-full md:gap-6">
                    <img class="rounded-lg object-cover w-full h-full" src="images/cateringphoto2.jpg"
                        alt="">
                    <img class="rounded-lg object-cover w-full h-full" src="images/cateringphoto2.jpg"
                        alt="">
                    <img class="rounded-lg object-cover w-full h-full" src="images/cateringphoto2.jpg"
                        alt="">
                    <img class="rounded-lg object-cover w-full h-full" src="images/cateringphoto2.jpg"
                        alt="">
                </div>
            </div>
        </div>


    </section>
    {{-- End Section III --}}

    <!-- Start Footer -->
    <footer class="bg-gray-900">
        <div class="mx-auto max-w-screen-xl space-y-8 px-4 pt-16 pb-7 sm:px-6 lg:space-y-16 lg:px-8">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-4">
                <div>
                    <div class="text-cyan-600 font-cabin flex items-center gap-x-4">
                        <img src="images/alanxcode.png" alt="" class="h-20 rounded-full" />
                        <h1 class="font-semibold text-3xl">Daris Travel</h1>
                    </div>
                    <p class="mt-4 max-w-xs text-gray-500">Jasa travel terpercaya untuk petualangan wisata yang tak
                        terlupakan.</p>

                    <ul class="mt-8 flex gap-6">
                        <li>
                            <a href="https://facebook.com/alanzagirekber" rel="noreferrer" target="_blank"
                                class="text-cyan-700 transition hover:opacity-75">
                                <span class="sr-only">Facebook</span>

                                <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="https://instagram.com/alanzagi" rel="noreferrer" target="_blank"
                                class="text-cyan-700 transition hover:opacity-75">
                                <span class="sr-only">Instagram</span>

                                <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="https://x.com/" rel="noreferrer" target="_blank"
                                class="text-cyan-700 transition hover:opacity-75">
                                <span class="sr-only">Twitter</span>

                                <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="https://github.com/alanzagi" rel="noreferrer" target="_blank"
                                class="text-cyan-700 transition hover:opacity-75">
                                <span class="sr-only">GitHub</span>

                                <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="#" rel="noreferrer" target="_blank"
                                class="text-cyan-700 transition hover:opacity-75">
                                <span class="sr-only">Dribbble</span>

                                <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:col-span-3 lg:grid-cols-4">
                    <div>
                        <p class="font-medium text-gray-900 text-2xl font-playfair">Halaman</p>

                        <ul class="mt-4 space-y-4 text-md">
                            <li>
                                <a href="beranda.html" class="text-cyan-700 transition hover:opacity-75"> Beranda </a>
                            </li>

                            <li>
                                <a href="tentang.html" class="text-cyan-700 transition hover:opacity-75"> Tentang </a>
                            </li>

                            <li>
                                <a href="layanan.html" class="text-cyan-700 transition hover:opacity-75"> Layanan </a>
                            </li>

                            <li>
                                <a href="kontak.html" class="text-cyan-700 transition hover:opacity-75"> Kontak </a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <p class="font-medium text-gray-900 text-2xl font-playfair">Kontak</p>

                        <ul class="mt-6 space-y-4 text-md">
                            <li class="flex items-center gap-x-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-6 lg:h-12">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                </svg>
                                <a href="#" target="_blank" class="text-gray-700 transition hover:opacity-75">
                                    Jl. Kridasana No.132 Kelurahan Pasiran, Singkawang Barat </a>
                            </li>

                            <li class="flex items-center gap-x-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                                </svg>

                                <a href="https://wa.me/6281521550913" target="_blank"
                                    class="text-gray-700 transition hover:opacity-75"> 0815-2155-0913 </a>
                            </li>
                        </ul>
                    </div>

                    <div
                        class="bg-slate-100 p-4 rounded-lg mt-4 grid grid-cols-2 gap-4 pr-4 md:col-span-2 lg:col-span-2 lg:mt-0">
                        <div class="col-span-3 space-y-6">
                            <div>
                                <h2 class="text-2xl font-medium text-gray-900 font-playfair">Dapatkan Informasi
                                    Terbaru!</h2>

                                <p class="mt-2 text-gray-500 font-cabin pr-8">Masukkan email anda di bawah untuk
                                    berlangganan informasi dan promosi terbaru seputar Daris Travel.</p>
                            </div>
                            <div class="col-span-2 lg:col-span-3 lg:flex lg:items-end">
                                <form class="w-full" name="database">
                                    <label for="email" class="sr-only"> Email </label>

                                    <div class="border border-cyan-100 p-2 sm:flex sm:items-center sm:gap-4">
                                        <input type="email" id="email" name="email"
                                            placeholder="email@domain.com"
                                            class="w-full border-none rounded-md focus:border-transparent focus:ring-transparent sm:text-sm"
                                            required />
                                        <button type="submit" id="submit"
                                            class="mt-3 flex items-center justify-center w-full bg-cyan-500 px-6 py-3 text-sm font-bold uppercase tracking-wide text-white transition-none rounded-md hover:bg-cyan-600 sm:mt-0 sm:w-auto sm:shrink-0">
                                            Kirim
                                        </button>
                                    </div>

                                    <div id="success-message"
                                        class="hidden flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50"
                                        role="alert">
                                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                        </svg>
                                        <span class="sr-only">Info</span>
                                        <div><span class="font-medium">Berhasil!</span> Emailmu telah masuk dalam
                                            daftar berlangganan informasi seputar Daris Travel.</div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <p class="text-sm text-gray-500 font-cabin">&copy; 2024. Daris Travel. All rights reserved.</p>
        </div>
    </footer>
    <!-- End Footer -->

    {{-- Flowbite Javascript --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>

</html>
