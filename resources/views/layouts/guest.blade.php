<!DOCTYPE html>
<html x-data="data" lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
        <!-- Scripts -->
        <script src="{{ asset('js/init-alpine.js') }}"></script>
</head>
<body x-data="{ 'showModal': false, 'starting':true, 'buttonok':false, 'showSubCat':false}" @keydown.escape="showModal = false" x-cloak>

    <div class="flex items-center min-h-screen p-6 bg-gray-50">
        <div class="w-full flex h-full mx-auto overflow-hidden bg-white rounded-lg shadow-xl">
            {{ $slot }}
        </div>
    </div>


    @livewireScripts
</body>
</html>
