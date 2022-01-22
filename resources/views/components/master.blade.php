@include('components.head')
@include('components.header')

<main id="master-slot">
    @yield('content')
</main>

@include('components.footer')