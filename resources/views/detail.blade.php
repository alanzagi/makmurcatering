<x-layout :title="$title" :activePage="$activePage">
    @section('page')
        <x-header></x-header>

        <header class="font-poppins">
            <div class="py-6 pl-4 text-sm font-medium flex items-start gap-x-1">
                <a href="/pemesanan" class="text-gray-900 hover:text-yellow-400 transition duration-400">Pemesanan</a> <span
                    class="opacity-50">
                    /
                </span>
                <a href="/pemesanan"
                    class="text-gray-900 hover:text-yellow-400 transition duration-400">{{ $menuItem->type }}</a>
                <span class="opacity-50">
                    /
                </span>
                <p>{{ $menuItem->name }}</p>
            </div>
        </header>

        <main class="bg-slate-100 px-4 py-12 font-poppins lg:px-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 lg:flex lg:gap-x-10">
                <div class="lg:w-[60%]">
                    <div class="w-full h-[24em] flex items-center justify-center">
                        <img src="{{ asset('images/' . $menuItem->photo) }}" alt="{{ $menuItem->name }}"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="w-full bg-white border border-gray-900/50 rounded-md text-center mt-4 p-5">
                        <h1 class="text-4xl font-bold text-gray-900">Rp{{ number_format($menuItem->price, 0, ',', '.') }},-
                        </h1>
                        <div class="flex items-center justify-center gap-x-2">
                            <h2 class="text-lg font-semibold text-gray-900/50 line-through">
                                Rp{{ number_format($menuItem->price * 1.2, 0, ',', '.') }},-
                            </h2>
                            <h2 class="text-sm font-semibold text-gray-900">
                                ({{ 12 * 10 - 100 }}%)
                            </h2>
                        </div>
                    </div>

                    <div class="mt-4">
                        <ul>
                            <li class="flex items-center gap-x-8">
                                <p class="font-semibold">Stock</p>
                                @if ($menuItem->stock > 0)
                                    <p class="text-slate-100 px-2 py-1 text-xs bg-green-500">Tersedia</p>
                                @else
                                    <p class="text-slate-100 px-2 py-1 text-xs bg-red-500">Tidak Tersedia</p>
                                @endif

                            </li>
                        </ul>

                        <form action="" method="POST" class="mt-4">
                            @csrf
                            <div x-data="{ count: 0, isClicked: '', maxStock: {{ $menuItem->stock }} }" class="flex items-center">
                                <!-- Tombol Kurang -->
                                <button type="button"
                                    @click="if (count > 0) { count--; isClicked = 'minus'; setTimeout(() => isClicked = '', 300); }"
                                    :class="isClicked === 'minus' ? 'bg-red-500 text-white' : 'text-gray-900'"
                                    class="px-4 py-2 rounded-l border border-gray-900/50 transition-colors duration-300">
                                    -
                                </button>

                                <!-- Input untuk menampilkan jumlah -->
                                <input type="text" x-model="count" readonly
                                    class="w-full text-center border border-gray-300 py-2" />

                                <!-- Tombol Tambah -->
                                <button type="button"
                                    @click="
                                    if (count < maxStock) {
                                        count++;
                                        isClicked = 'plus';
                                        setTimeout(() => isClicked = '', 300);
                                    } else {
                                        Swal.fire({
                                            icon: 'warning',
                                            title: 'Stok Habis!',
                                            text: 'Jumlah pesanan sudah mencapai stok maksimal',
                                            confirmButtonText: 'OK',
                                            customClass: { confirmButton: 'btn-red' }
                                        });
                                    }"
                                    :class="isClicked === 'plus' ? 'bg-green-500 text-white' : 'text-gray-900'"
                                    class="px-4 py-2 rounded-r border border-gray-900/50 transition-colors duration-300">
                                    +
                                </button>
                            </div>

                            <!-- Tombol submit -->
                            <button type="submit"
                                class="w-full py-4 mt-2 bg-yellow-400 rounded-md font-bold text-sm text-slate-100 uppercase border border-yellow-400 transition duration-900 hover:bg-slate-100 hover:text-yellow-400">
                                Pesan Menu Ini
                            </button>
                        </form>

                    </div>
                </div>

                <div class="w-full p-4 border border-gray-900/50 mt-4 pb-8 lg:pt-4 lg:-mt-[0em]">
                    <h1 class="font-bold uppercase text-xl">{{ $menuItem->name }}</h1>
                    <p>{{ $menuItem->description }}</p>

                    <ul class="space-y-1 pt-4">
                        <li class="p-2 border-b border-gray-900/50">
                            <span class="text-base font-bold">Nomor Menu</span> : {{ $menuItem->menu_number }}
                        </li>
                        <li class="p-2 border-b border-gray-900/50">
                            <span class="text-base font-bold">Jenis Menu</span> : {{ $menuItem->type }}
                        </li>
                        <li class="p-2 border-b border-gray-900/50">
                            <span class="text-base font-bold">Ketersediaan Menu</span> : {{ $menuItem->stock }}
                        </li>
                    </ul>
                </div>

            </div>


            <div class="mt-4 border border-gray-900/50">
                <div class="w-full p-4 text-lg font-semibold border-b border-gray-900/50">
                    Menu Lainnya
                </div>

                @foreach ($menuItems as $menuItem)
                    <div class="p-4 flex items-center gap-x-2">
                        <div class="h-20 w-20">
                            <a href="{{ route('menu.show', $menuItem->slug) }}"
                                class="hover:text-yellow-400 transition duration-400">
                                <img src="{{ asset('images/' . $menuItem->photo) }}" alt="{{ $menuItem->name }}">
                            </a>
                        </div>

                        <div>
                            <a href="{{ route('menu.show', $menuItem->slug) }}"
                                class="hover:text-yellow-400 transition duration-400">
                                {{ $menuItem->name }}
                            </a>
                            <div class="flex items-center gap-x-2">
                                <p class="font-bold text-md text-gray-900">
                                    Rp{{ number_format($menuItem->price, 0, ',', '.') }},-</p>
                                <p class="line-through text-sm text-gray-900/50">
                                    Rp{{ number_format($menuItem->price * 1.2, 0, ',', '.') }},-
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </main>
    @endsection
</x-layout>
