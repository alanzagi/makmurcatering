<x-layout :title="$title" :activePage="$activePage">
    @section('page')
        <div>
            <h1>Detail Menu: {{ $menuItem->name }}</h1>
            <p><img src="{{ asset('images/' . $menuItem->photo) }}" alt="{{ $menuItem->name }}" width="200"></p>
            <p>Harga: Rp {{ number_format($menuItem->price, 0, ',', '.') }}</p>
            <p>Deskripsi: {{ $menuItem->description }}</p>
            <p>Nomor Menu: {{ $menuItem->menu_number }}</p>
            <p>Jenis: {{ $menuItem->type }}</p>
            <p>Stok: {{ $menuItem->stock }}</p>
        </div>
    @endsection
</x-layout>
