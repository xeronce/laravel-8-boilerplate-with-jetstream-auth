<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{$title}} | {{env('APP_NAME')}}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/stylesheet.css">
        <!-- Styles -->
        @livewireStyles

    </head>
    <body class="font-sans antialiased">

        <div class="min-h-screen bg-gray-100">

            <header class="bg-white shadow flex">
                <x-smart-container cls="flex-row flex justify-between">
                    <div class="h-20 flex justify-start items-center">
                        <div class="border">Logo</div>
                    </div>
                    <div class="h-full">
                        <ul class="h-full flex flex-row justify-center items-center">
                            <li>
                                <a class="h-20 items-center px-5 flex border-r hover:bg-gray-100 cursor-pointer">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit">Log Out</button>
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </div>
                </x-smart-container>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts

        <!-- Scripts -->
        <script src="/js/app.js"></script>
    </body>
</html>
