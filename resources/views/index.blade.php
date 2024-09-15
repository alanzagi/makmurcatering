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
    </style>
</head>

<body>
    <nav class="absolute top-0 left-0 w-full bg-transparent z-50 font-poppins ">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://instagram.com/alanzagi" class="flex items-center space-x-3 rtl:space-x-reverse"
                target="_blank">
                <span class="self-center text-2xl font-medium whitespace-nowrap text-cyan-400">M_Catering</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button data-collapse-toggle="navbar-cta" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-cyan-400 rounded-lg md:hidden hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-600"
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
                            class="block py-2 px-3 md:p-2 text-white rounded bg-cyan-500 hover:text-white hover:bg-cyan-500 md:hover:bg-transparent md:hover:text-cyan-500 md:transition-colors md:duration-500 md:ease-in-out md:text-lg md:bg-transparent md:text-cyan-500"
                            aria-current="page">Beranda</a>
                    </li>
                    <li>
                        <a href="/layanan"
                            class="block py-2 px-3 md:p-2 rounded hover:text-white hover:bg-cyan-500 md:hover:bg-transparent md:hover:text-cyan-500 md:transition-colors md:duration-500 md:ease-in-out md:text-lg md:bg-transparent">Layanan</a>
                    </li>
                    <li>
                        <a href="/pemesanan"
                            class="block py-2 px-3 md:p-2 rounded hover:text-white hover:bg-cyan-500 md:hover:bg-transparent md:hover:text-cyan-500 md:transition-colors md:duration-500 md:ease-in-out md:text-lg md:bg-transparent">Pemesanan</a>
                    </li>
                    <li>
                        <a href="/kontak"
                            class="block py-2 px-3 md:p-2 rounded hover:text-white hover:bg-cyan-500 md:hover:bg-transparent md:hover:text-cyan-500 md:transition-colors md:duration-500 md:ease-in-out md:text-lg md:bg-transparent">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="h-screen bg-[url('images/backgroundcatering.jpg')]">
    </main>
    {{-- Flowbite Javascript --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>

</html>
