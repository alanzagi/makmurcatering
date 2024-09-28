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

        <main class="px-4 py-8 font-poppins bg-slate-100 lg:px-20">
            <form action="{{ route('struk') }}" method="POST">
                @csrf
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <!-- Nama Lengkap -->
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap</label>
                        <input type="text" id="name" name="name" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full px-2.5 py-[1em]" />
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <input type
                        ="email" id="email" name="email" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full px-2.5 py-[1em]" />
                    </div>

                    <!-- Nama Perusahaan (jika ada) -->
                    <div>
                        <label for="company" class="block mb-2 text-sm font-medium text-gray-900">Nama Perusahaan (jika
                            ada)</label>
                        <input type="text" id="company" name="company"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full px-2.5 py-[1em]" />
                    </div>

                    <!-- Alamat -->
                    <div>
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Alamat Lengkap</label>
                        <input type="text" id="address" name="address" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full px-2.5 py-[1em]" />
                    </div>

                    <!-- Nomor Whatsapp -->
                    <div>
                        <label for="number" class="block mb-2 text-sm font-medium text-gray-900">Nomor Whatsapp</label>
                        <input type="tel" id="number" name="number" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full px-2.5 py-[1em]" />
                    </div>

                    <!-- Kelurahan -->
                    <div>
                        <label for="kelurahan" class="block mb-2 text-sm font-medium text-gray-900">Pilih Kecamatan</label>
                        <select id="kelurahan" name="kelurahan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full px-2.5 py-[1em]">
                            <option value="">Pilih Kelurahan</option>
                            <option value="pasiran">Pasiran</option>
                            <option value="melayu">Melayu</option>
                            <option value="tengah">Tengah</option>
                            <option value="sedau">Sedau</option>
                            <option value="kuala">Kuala</option>
                            <option value="semelagi-kecil">Semelagi Kecil</option>
                            <option value="roban">Roban</option>
                            <option value="sekip-lama">Sekip Lama</option>
                            <option value="sekip-baru">Sekip Baru</option>
                            <option value="jawa">Jawa</option>
                            <option value="condong">Condong</option>
                            <option value="bukit-batu">Bukit Batu</option>
                            <option value="naram">Naram</option>
                            <option value="pajintan">Pajintan</option>
                            <option value="sijangkung">Sijangkung</option>
                            <option value="bagak-sahwa">Bagak Sahwa</option>
                            <option value="mayasopa">Mayasopa</option>
                            <option value="sungai-garam-hilir">Sungai Garam Hilir</option>
                            <option value="sungai-garam-hulu">Sungai Garam Hulu</option>
                            <option value="sanggau-kulor">Sanggau Kulor</option>
                            <option value="setapuk-besar">Setapuk Besar</option>
                            <option value="setapuk-kecil">Setapuk Kecil</option>
                            <option value="sigiring">Sigiring</option>
                            <option value="siantan">Siantan</option>
                            <option value="sagatani">Sagatani</option>
                            <option value="sijangkung">Sijangkung</option>
                            <option value="pangmilang">Pangmilang</option>
                            <option value="sungai-rasau">Sungai Rasau</option>
                            <option value="bukit-merapin">Bukit Merapin</option>
                        </select>
                    </div>

                    {{-- Metode Pembayaran --}}
                    <div>
                        <label for="payment" class="block mb-2 text-sm font-medium text-gray-900">Pilih Metode
                            Pembayaran</label>
                        <select id="payment" name="payment"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full px-2.5 py-[1em]">
                            <option value="">Metode Pembayaran</option>
                            <option value="bank">Bank</option>
                            <option value="dana">Dana</option>
                        </select>
                    </div>
                </div>

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
                    <!-- Input form lainnya seperti name, email, address, dll. -->

                    <!-- Menyimpan data menuItem dan count sebagai hidden input -->
                    <input type="hidden" name="menuItem[name]" value="{{ $menuItem->name }}">
                    <input type="hidden" name="menuItem[price]" value="{{ $menuItem->price }}">
                    <input type="hidden" name="count" value="{{ $count }}">
                </div>

                <!-- Textarea untuk Catatan Tambahan -->
                <div class="pb-4">
                    <h1 class="font-semibold text-xl mb-4">Keterangan Tambahan:</h1>
                    <textarea name="catatan" id="catatan" cols="30" rows="10" class="w-full bg-white"></textarea>
                </div>

                <!-- Tombol Submit -->
                <button type="submit"
                    class="text-yellow-400 font-bold uppercase rounded-l-lg bg-transparent ring ring-yellow-400 hover:bg-yellow-400 hover:text-slate-100 transition duration-400 focus:ring-4 focus:outline-none focus:ring-yellow-300 text-lg w-full sm:w-auto px-5 py-2.5 text-center lg:py">Lanjut</button>
            </form>
        </main>
    @endsection
</x-layout>
