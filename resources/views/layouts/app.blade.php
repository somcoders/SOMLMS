<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;1,600&display=swap"
        rel="stylesheet" />
    <style>
        :root {
            font-family: 'Source Sans Pro';
        }

        main#dashboard-main::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        main#dashboard-main::-webkit-scrollbar-thumb {
            border-radius: 9999px;
            background-color: rgb(156 163 175 / 0.75);
        }

        main#dashboard-main::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px rgb(156 163 175 / 0.75);
            border-radius: 10px;
        }
    </style>
    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}" />
    <script src="{{ asset('js/all.min.js') }}"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased">
    <div class="bg-slate-200 flex h-screen">
        @include('layouts.admin-sidebar')
        <!-- /Sidebar -->

        <div class="flex h-full w-full flex-col">
            <!-- Navbar -->
            @include('layouts.navigation')
            <!-- /Navbar -->

            <!-- Main -->
            <div class="h-full overflow-hidden pl-10">
                <main id="dashboard-main" class="h-screen overflow-auto px-4 py-10">
                    <!-- Put your content inside of the <main/> tag -->
                    {{ $slot }}
                </main>
            </div>
            <!-- /Main -->
        </div>
    </div>

</body>

</html>
