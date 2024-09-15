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

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100..900;1,100..900&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap");


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

        .bg-catering {
            background-image: url('{{ asset('images/cateringbackground.jpg') }}');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body>
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

    <main class="h-screen bg-catering font-poppins flex items-center  ">
        <div class="absolute inset-0 bg-black opacity-40 z-0"></div>
        <div class="relative text-white z-10 flex flex-col items-start pl-4">
            <h2 class="text-xl">Selamat Datang Di</h2>
            <h1 class="text-3xl font-semibold text-yellow-400">Makmur Catering</h1>
            <p class="text-md">Menyediakan kebutuhan catering sejak 2010</p>
        </div>
    </main>
    {{-- Flowbite Javascript --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>

</html>
