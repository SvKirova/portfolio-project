<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="{{ $description }}">
    <meta name="keywords" content="{{ $keywords }}">
    <meta name="author" content="Svetlozara Kirova">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <link href='https://fonts.googleapis.com/css?family=Silkscreen' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Tomorrow' rel='stylesheet'>
    <link rel="stylesheet" href= {{ asset('css-files/style.css') }}>
    <script type="text/javascript" src="{{ asset('asideMenu.js') }}"></script>
    <title>{{ $title }}</title>
    @stack('styles')
</head>
<body>

<header>
    <x-ui.navbar>
        <x-ui.aside>
            @foreach($asideItems as $index => $asideItem)
                <x-ui.aside-item :link="$asideItem['link']">
                    {{ $asideItem['title'] }}
                </x-ui.aside-item>

                {{-- Add separator after each aside item except the last one --}}
                @if($index < count($asideItems) - 1)
                    <x-ui.aside-separator></x-ui.aside-separator>
                @endif
            @endforeach
        </x-ui.aside>
        <x-ui.aside-button></x-ui.aside-button>

        @foreach($navItems as $navItem)
            <x-ui.navbar-item :route="$navItem['route']">{{ $navItem['title'] }}</x-ui.navbar-item>
        @endforeach
    </x-ui.navbar>
</header>

<main>
    <x-ui.notifications></x-ui.notifications>
    {{ $slot }}
</main>

<!-- Footer -->
<footer>
    <p>&copy; 2024 SvKirova
        <a href="https://github.com/SvKirova" target="_blank">GitHub</a> |
        <a href="mailto:kiro0003@hz.nl">Email</a> |
        <a href="https://hz.nl/" target="_blank">HZ</a>
    </p>
</footer>
@stack('scripts')
</body>
</html>
