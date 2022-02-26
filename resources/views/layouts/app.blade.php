<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @component('components.head') 
    @endcomponent
</head>
<body class="antialiased">
    <header>
        @component('components.header')
        @endcomponent
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @component('components.footer')
        @endcomponent
    </footer>

    @component('components.scripts')
    @endcomponent
</body>
</html>