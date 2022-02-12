@include('components.Templates.head')
@include('components.Templates.header')

<main id="master-slot">
    @yield('content')
</main>

@include('components.Templates.footer')
