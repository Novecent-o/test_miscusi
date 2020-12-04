<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    {{-- Include Head --}}
    @include("partials.head")

<body>

    {{-- Include Header --}}
    @include("partials.header")

    {{-- Yield Main --}}
    <main class="py-4">
        @yield('content')
    </main>

    {{-- Include Footer --}}
    @include("partials.footer")

</body>
</html>
