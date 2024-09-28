<x-layout :title="$title" :activePage="$activePage">
    @section('page')
        <x-header></x-header>


        <main class="font-poppins py-10 bg-slate-100 max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
            <div class="sm:w-11/12 lg:w-3/4 mx-auto">
                <!-- Card -->
                <form id="whatsapp-form" action="https://wa.me/6281521550913?text=" method="get" target="_blank"
                    onsubmit="return prepareWhatsAppMessage()">
                    <div class="flex flex-col p-4 sm:p-10 bg-white shadow-md rounded-xl">
                        <!-- Header -->
                        <div class="flex justify-between">
                            <h1 class="mt-2 text-lg md:text-xl font-bold text-yellow-400">Makmur Catering</h1>
                            <div class="text-end">
                                <h2 class="text-2xl md:text-3xl font-semibold text-gray-800">Pembayaran #</h2>
                                <address class="mt-4 not-italic text-gray-800">
                                    Jl. Kridasana No. 132<br>
                                    Kelurahan Pasiran, Kota Singkawang<br>
                                    Indonesia<br>
                                </address>
                            </div>
                        </div>

                        <!-- Customer Info -->
                        <div class="mt-8 grid sm:grid-cols-2 gap-3">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800">Atas Nama:</h3>
                                <h3 class="text-lg font-semibold text-gray-800">
                                    {{ $orderData['name'] }}
                                    @if (!empty($orderData['company']))
                                        - {{ $orderData['company'] }}
                                    @endif
                                </h3>
                                <address class="mt-2 not-italic text-gray-500">
                                    {{ $orderData['address'] }}<br>
                                    Kelurahan {{ ucwords(str_replace('-', ' ', $orderData['kelurahan'])) }}, Kota
                                    Singkawang<br>
                                    Indonesia<br>
                                    <span class="text-xs">
                                        Alamat Email: {{ $orderData['email'] }} <br>
                                        Nomor Whatsapp: {{ $orderData['number'] }}
                                    </span>
                                </address>
                            </div>

                            <div class="sm:text-end space-y-2">
                                <div class="grid grid-cols-2 sm:grid-cols-1 gap-3 sm:gap-2">
                                    <dl class="grid sm:grid-cols-5 gap-x-3">
                                        <dt class="col-span-3 font-semibold text-gray-800">Tanggal Pembayaran:</dt>
                                        <dd class="col-span-2 text-gray-500">{{ $today }}</dd>
                                    </dl>
                                    <dl class="grid sm:grid-cols-5 gap-x-3">
                                        <dt class="col-span-3 font-semibold text-gray-800">Jatuh Tempo Pembayaran:</dt>
                                        <dd class="col-span-2 text-gray-500">{{ $tomorrow }}</dd>
                                    </dl>
                                    <dl class="grid sm:grid-cols-5 gap-x-3">
                                        <dt class="col-span-3 font-semibold text-gray-800">Metode Pembayaran:</dt>
                                        <dd class="col-span-2 text-gray-500">
                                            {{ ucwords(str_replace('-', ' ', $orderData['payment'])) }}</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>

                        <!-- Table -->
                        <div class="mt-6 border border-gray-200 p-4 rounded-lg space-y-4">
                            <div class="hidden sm:grid sm:grid-cols-5">
                                <div class="sm:col-span-2 text-xs font-medium text-gray-500 uppercase">Menu</div>
                                <div class="text-start text-xs font-medium text-gray-500 uppercase">Satuan</div>
                                <div class="text-start text-xs font-medium text-gray-500 uppercase">Jumlah Total</div>
                                <div class="text-end text-xs font-medium text-gray-500 uppercase">Total Harga</div>
                            </div>

                            <div class="grid grid-cols-3 sm:grid-cols-5 gap-2">
                                <div class="col-span-full sm:col-span-2">
                                    <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Menu</h5>
                                    <p class="font-medium text-gray-800">{{ $menuItem['name'] }}</p>
                                </div>
                                <div>
                                    <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Satuan</h5>
                                    <p class="text-gray-800">1</p>
                                </div>
                                <div>
                                    <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Jumlah Menu</h5>
                                    <p class="text-gray-800">{{ $count }}</p>
                                </div>
                                <div>
                                    <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Subtotal</h5>
                                    <p class="sm:text-end text-gray-800">
                                        Rp{{ number_format($menuItem['price'] * $count, 0, ',', '.') }},-</p>
                                </div>
                            </div>
                        </div>

                        <!-- Summary -->
                        <div class="mt-8 flex sm:justify-end">
                            <div class="w-full max-w-2xl sm:text-end space-y-2">
                                <div class="grid grid-cols-2 sm:grid-cols-1 gap-3 sm:gap-2">
                                    <dl class="grid sm:grid-cols-5 gap-x-3">
                                        <dt class="col-span-3 font-semibold text-gray-800">Subtotal:</dt>
                                        <dd class="col-span-2 text-gray-500">
                                            Rp{{ number_format($menuItem['price'] * $count, 0, ',', '.') }},-</dd>
                                    </dl>
                                    <dl class="grid sm:grid-cols-5 gap-x-3">
                                        <dt class="col-span-3 font-semibold text-gray-800">Ongkir:</dt>
                                        <dd class="col-span-2 text-gray-500">
                                            @php
                                                $subtotal = $menuItem['price'] * $count;
                                                $ongkir = $subtotal / 10; // 10% dari subtotal
                                            @endphp
                                            Rp{{ number_format($ongkir, 0, ',', '.') }},-
                                        </dd>
                                    </dl>
                                    <dl class="grid sm:grid-cols-5 gap-x-3">
                                        <dt class="col-span-3 font-semibold text-gray-800">Jumlah Total Pembayaran:</dt>
                                        <dd class="col-span-2 text-gray-900 font-bold">
                                            @php
                                                $totalPembayaran = $subtotal + $ongkir;
                                            @endphp
                                            Rp{{ number_format($totalPembayaran, 0, ',', '.') }},-
                                        </dd>
                                    </dl>
                                    @if (!empty($orderData['catatan']))
                                        <dl class="grid sm:grid-cols-5 gap-x-3">
                                            <dt class="col-span-3 font-semibold text-gray-800">Catatan Tambahan:</dt>
                                            <dd class="col-span-2 text-gray-900">
                                                {{ $orderData['catatan'] }}
                                            </dd>
                                        </dl>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Thank You Message -->
                        <div class="mt-8 sm:mt-12">
                            <h4 class="text-lg font-semibold text-gray-800">Terima Kasih!</h4>
                            <p class="text-gray-500">Jika kamu mempunyai pertanyaan seputar
                                <br>struk pembayaran bisa menghubungi kontak kami di bawah
                            </p>
                            <div class="mt-2">
                                <p class="block text-sm font-medium text-gray-800">makmurcatering.com</p>
                                <p class="block text-sm font-medium text-gray-800">+62 815 2155 0913</p>
                            </div>
                        </div>

                        <p class="mt-5 text-sm text-gray-500">© 2024 Makmur Catering.</p>
                    </div>
                    <!-- End Card -->

                    <!-- Hidden Input for WhatsApp Message -->
                    <input type="hidden" name="text" id="whatsapp-message">
                    <button type="submit"
                        class="py-2 px-3 inline-flex items-end gap-x-3 mt-4 text-sm font-medium rounded-lg border border-transparent bg-yellow-400 text-white hover:bg-yellow-500 focus:outline-none focus:bg-yellow-500">
                        <img src="{{ asset('images/whatsapp.png') }}" alt="Whatsapp" class="w-5 h-5">
                        Konfirmasi Pembayaran
                    </button>
                    <!-- End Buttons -->
                </form>

                <script>
                    function formatRupiah(number) {
                        const formatter = new Intl.NumberFormat('id-ID', {
                            style: 'currency',
                            currency: 'IDR',
                            minimumFractionDigits: 0,
                        });
                        return formatter.format(number).replace(/IDR/, '').trim(); // Remove "IDR" and trim the string
                    }

                    function prepareWhatsAppMessage() {
                        const name = "{{ $orderData['name'] }}";
                        const address = "{{ $orderData['address'] }}";
                        const kelurahan = "{{ ucwords(str_replace('-', ' ', $orderData['kelurahan'])) }}";
                        const today = "{{ $today }}";
                        const tomorrow = "{{ $tomorrow }}";
                        const menuItemName = "{{ $menuItem['name'] }}";
                        const count = {{ $count }};
                        const price = {{ $menuItem['price'] }};
                        const catatan = "{{ $orderData['catatan'] }}";
                        const payment = "{{ ucwords(str_replace('-', ' ', $orderData['payment'])) }}";
                        const subtotal = price * count;
                        const ongkir = subtotal / 10;
                        const totalPembayaran = subtotal + ongkir;
                        const company = "{{ $orderData['company'] }}";

                        // Format rupiah for subtotal, ongkir, and total payment
                        const formattedSubtotal = formatRupiah(subtotal);
                        const formattedOngkir = formatRupiah(ongkir);
                        const formattedTotal = formatRupiah(totalPembayaran);

                        // Get additional notes
                        const catatanMessage = catatan ? `*Catatan Tambahan:* ${catatan}\n` : '';
                        const companyName = company ? `*Nama Perusahaan:* ${company}\n` : '';

                        // Create WhatsApp message
                        const message =
                            `*Makmur Catering*\n\n` +
                            `*Atas Nama:* ${name}\n` +
                            `*Alamat:* ${address}, Kelurahan ${kelurahan}, Kota Singkawang, Indonesia\n\n` +
                            `*Rincian Pembayaran:*\n` +
                            `- Barang: ${menuItemName}\n` +
                            `- Jumlah Barang: ${count}\n` +
                            `- Subtotal: Rp${formattedSubtotal},-\n` +
                            `- Ongkir: Rp${formattedOngkir},-\n` +
                            `*Jumlah Total Pembayaran: Rp${formattedTotal},-*\n\n` +
                            `*Tanggal Pembayaran:* ${today}\n` +
                            `*Jatuh Tempo Pembayaran:* ${tomorrow}\n\n` +
                            companyName +
                            catatanMessage + // Add notes if available
                            `Terima Kasih!`;

                        // Set message in hidden input
                        document.getElementById('whatsapp-message').value = message;
                        return true;
                    }
                </script>
            </div>
        </main>
    @endsection
</x-layout>
