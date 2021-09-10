<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tailwind.output.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/core.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/icon-font.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/icon-font.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{asset('js/init-alpine.js')}}" defer></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
    <script src="{{asset('js/charts-lines.js')}}" defer></script>
    <script src="{{asset('js/charts-pie.js')}}" defer></script>
    <script src="{{asset('js/charts-bars.js')}}" defer></script>

    <script src="{{asset('scripts/advanced-components.js')}}" defer></script>
    <script src="{{asset('scripts/apexcharts-setting.js')}}" defer></script>
    <script src="{{asset('scripts/calendar-setting.js')}}" defer></script>
    <script src="{{asset('scripts/colorpicker.js')}}" defer></script>
    <script src="{{asset('scripts/core.js')}}" defer></script>
    <script src="{{asset('scripts/core.min.js')}}" defer></script>
    <script src="{{asset('scripts/dashboard.js')}}" defer></script>
    <script src="{{asset('scripts/dashboard2.js')}}" defer></script>
    <script src="{{asset('scripts/dashboard3.js')}}" defer></script>
    <script src="{{asset('scripts/datatable-setting.js')}}" defer></script>
    <script src="{{asset('scripts/highchart-setting.js')}}" defer></script>
    <script src="{{asset('scripts/jvectormap-setting.js')}}" defer></script>
    <script src="{{asset('scripts/knob-chart-setting.js')}}" defer></script>
    <script src="{{asset('scripts/layout-settings.js')}}" defer></script>
    <script src="{{asset('scripts/process.js')}}" defer></script>
    <script src="{{asset('scripts/range-slider-setting.js')}}" defer></script>
    <script src="{{asset('scripts/script.js')}}" defer></script>
    <script src="{{asset('scripts/script.min.js')}}" defer></script>
    <script src="{{asset('scripts/steps-setting.js')}}" defer></script>


    @livewireStyles
    <script>
        import Turbolinks from 'turbolinks';
        Turbolinks.start()
    </script>

    <!-- Scripts -->
    {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script> --}}
</head>

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        @include('layouts.menu')
        @include('layouts.mobile-menu')

        <div class="flex flex-col flex-1 w-full">
            @include('layouts.navigation-dropdown')
            <main class="h-full overflow-y-auto">
                {{ $slot }}
            </main>
        </div>


        @stack('modals')

        @livewireScripts
    </div>
</body>

</html>
