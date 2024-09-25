<x-layout :title="$title" :activePage="$activePage">
    @section('page')
        <x-header></x-header>

        <header class="font-poppins">
            <div class="py-6">
                <div class="pl-4 text-sm font-medium flex items-start gap-x-1">
                    <a href="/pemesanan" class="text-gray-900 hover:text-yellow-400 transition duration-400">Pemesanan</a>
                    <span class="opacity-50">
                        /
                    </span>
                    <a href="/pemesanan" class="text-gray-900 hover:text-yellow-400 transition duration-400">Pengiriman
                    </a>
                </div>
                <div>
                    <h1 class="text-3xl font-bold pl-4 text-gray-700">Pengiriman</h1>
                </div>
            </div>
        </header>

        <main class="px-4 py-8 font-poppins bg-slate-100">
            <form>
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap</label>
                        <input type="text" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full px-2.5 py-[1em]"
                            required />
                    </div>

                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <input type="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full px-2.5 py-[1em]"
                            required />
                    </div>

                    <div>
                        <label for="company" class="block mb-2 text-sm font-medium text-gray-900">Nama Perusahaan (jika
                            ada)</label>
                        <input type="text" id="company"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full px-2.5 py-[1em]" />
                    </div>

                    <div>
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
                        <input type="text" id="address"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full px-2.5 py-[1em]"
                            required />
                    </div>

                    <div>
                        <label for="kecamatan" class="block mb-2 text-sm font-medium text-gray-900">Pilih Kecamatan</label>
                        <select id="kecamatan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full px-2.5 py-[1em]">
                            <option value="">Pilih Kecamatan</option>
                            <option value="singkawang-barat">Singkawang Barat</option>
                            <option value="singkawang-tengah">Singkawang Tengah</option>
                            <option value="singkawang-timur">Singkawang Timur</option>
                            <option value="singkawang-utara">Singkawang Utara</option>
                            <option value="singkawang-selatan">Singkawang Selatan</option>
                        </select>
                    </div>

                    <div>
                        <label for="number" class="block mb-2 text-sm font-medium text-gray-900">Nomor Whatsapp</label>
                        <input type="tel" id="number"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full px-2.5 py-[1em]"
                            required />
                    </div>
                </div>

                @php
                    $menuItem = session('menu_item');
                    $count = session('count');
                @endphp

                <div class="pb-4">
                    <h1 class="font-semibold text-xl">Detail Pesanan:</h1>
                    <ul class="my-4 text-sm space-y-4">
                        @if ($menuItem && $count)
                            <li class="flex flex-col gap-y-4">
                                <span>Jumlah Pembelian</span>
                                <span>{{ $count }} Porsi {{ $menuItem->name }}</span>
                                <hr class="border border-gray-900/50 w-full">
                            </li>
                            <li class="flex flex-col gap-y-4">
                                <span>Harga Pembelian</span>
                                <span>Rp{{ number_format($menuItem->price, 0, ',', '.') }},- Per Porsi</span>
                                <hr class="border border-gray-900/50 w-full">
                            </li>
                            <li class="flex flex-col gap-y-4">
                                <span>Total Harga Pembelian</span>
                                <span
                                    class="text-xl font-bold">Rp{{ number_format($menuItem->price * $count, 0, ',', '.') }},-</span>
                                <hr class="border border-gray-900/50 w-full">
                            </li>
                        @else
                            <p>Tidak ada data pemesanan yang ditemukan.</p>
                        @endif
                    </ul>

                    <h1 class="font-semibold text-xl mb-4">Keterangan Tambahan:</h1>
                    <textarea name="" id="" cols="30" rows="10" class="w-full bg-white"></textarea>
                </div>

                <button type="submit"
                    class="text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Lanjut</button>
            </form>
        </main>
    @endsection
</x-layout>
