<!DOCTYPE html>
<html lang="en">
<x-head :title="$title"></x-head>

<body>
    {{-- Start Navigasi --}}
    <x-navbar :activePage="$activePage"></x-navbar>
    {{-- End Navigasi --}}

    @yield('page')

    {{-- Start Whatsapp Fixed --}}
    <x-whatsapp></x-whatsapp>
    {{-- End Whatsapp Fixed --}}

    {{-- Start Footer --}}
    <x-footer :activePage="$activePage"></x-footer>
    {{-- End Footer --}}

    <x-end-body></x-end-body>
</body>

</html>
