<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Shyra Beautique')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-[#fff8fc] text-gray-800">

    @php
        // shared look for every nav link
        $navBase = 'relative transition-colors duration-300 after:absolute after:-bottom-1 after:left-0 after:h-0.5 after:w-full after:origin-left after:bg-[#8E5572] after:transition-transform after:duration-300';

        // current page: colored text + underline always visible
        $navActive = 'text-[#8E5572] after:scale-x-100';

        // other pages: gray text + underline appears on hover
        $navIdle = 'text-gray-700 hover:text-[#8E5572] after:scale-x-0 hover:after:scale-x-100';

        $links = [
            ['label' => 'Home',       'url' => '/',        'active' => request()->is('/')],
            ['label' => 'Catalog',    'url' => '/catalog', 'active' => request()->is('catalog*')],
            ['label' => 'About',      'url' => '/about',   'active' => request()->is('about*')],
            ['label' => 'Contact Us', 'url' => '/contact', 'active' => request()->is('contact*')],
        ];
    @endphp

    <header class="sticky top-0 z-50 border-b border-pink-100 bg-white/95 backdrop-blur">
        <nav class="mx-auto flex max-w-7xl items-center justify-between px-8 py-5">

            <!-- logo -->
            <a href="/" class="text-2xl font-semibold tracking-wide text-[#6D3A5E]">
                Shyra Beautique
            </a>

            <!-- nav -->
            <div class="flex items-center gap-8 text-sm font-medium">

                @foreach ($links as $link)
                    <a href="{{ $link['url'] }}"
                        class="{{ $navBase }} {{ $link['active'] ? $navActive : $navIdle }}"
                        @if ($link['active']) aria-current="page" @endif>
                        {{ $link['label'] }}
                    </a>
                @endforeach

                <a href="/login"
                    class="rounded-full bg-[#8E5572] px-6 py-2.5 text-white transition hover:bg-[#6D3A5E]">
                    Login
                </a>

            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

</body>

</html>