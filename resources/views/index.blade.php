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

        <div class="grid grid-cols-1 p-6 gap-y-6 md:grid-cols-2 md:gap-x-6 lg:p-32">
            <div class="grid grid-cols-2 gap-4 h-full md:gap-6">
                <img class="rounded-lg object-cover w-full h-full" src="images/cateringphoto2.jpg" alt="">
                <img class="rounded-lg object-cover w-full h-full" src="images/cateringphoto2.jpg" alt="">
                <img class="rounded-lg object-cover w-full h-full" src="images/cateringphoto2.jpg" alt="">
                <img class="rounded-lg object-cover w-full h-full" src="images/cateringphoto2.jpg" alt="">
            </div>

            <div
                class="p-10 bg-white border border-gray-200 rounded-lg shadow-md shadow-yellow-500 flex flex-col justify-center h-full">
                <div class="text-center space-y-3 px-5">
                    <h5 class="mb-2 text-2xl font-euphoria tracking-tight text-gray-900">
                        Pesan
                    </h5>
                    <h1 class="text-3xl mb-3 font-bold uppercase text-gray-700">menu kami</h1>
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
    {{-- End Section III --}}

    {{-- Flowbite Javascript --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>

</html>
