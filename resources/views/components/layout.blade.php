<!DOCTYPE html>
<html lang="en">
<x-head :title="$title"></x-head>

<body>
    {{-- Start Navigasi --}}
    <x-navbar :activePage="$activePage"></x-navbar>
    {{-- End Navigasi --}}

    @yield('page')

    {{-- Start Footer --}}
    <x-footer :activePage="$activePage"></x-footer>
    {{-- End Footer --}}

    <x-endbody></x-endbody>
</body>

</html>
