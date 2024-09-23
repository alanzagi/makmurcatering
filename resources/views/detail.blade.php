<x-layout :title="$title" :activePage="$activePage">
    @section('page')
        <x-header></x-header>


        <main class="bg-slate-100 px-4 pt-12 font-poppins">
            <div class="w-full h-[24em] flex items-center justify-center">
                <img src="{{ asset('images/' . $menuItem->photo) }}" alt="{{ $menuItem->name }}"
                    class="w-full h-full object-cover">
            </div>
            <div class="w-full bg-white border-2 border-yellow-400 rounded-md text-center mt-4 p-5">
                <h1 class="text-4xl font-bold text-gray-900">Rp{{ number_format($menuItem->price, 0, ',', '.') }},-</h1>
                <h2 class="text-lg font-semibold text-gray-900/50">
                    Rp{{ number_format($menuItem->price * 1.2, 0, ',', '.') }},-</h2>
            </div>
        </main>
    @endsection
</x-layout>
