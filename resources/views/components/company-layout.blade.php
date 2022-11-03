<!DOCTYPE html>
<html x-data="globalData" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <!-- Scripts -->
    <script src="{{ asset('js/init-alpine.js') }}"></script>
    @notifyCss
</head>

<body class="selection:bg-blue-500 selection:text-white" x-data="{ 'showModal': false, 'starting': true, 'buttonok': false, 'showSubCat': false }" @keydown.escape="showModal = false"
      x-cloak>

<div class="w-full bg-blue-50 min-h-screen">
    {{ $slot }}
    <x:notify-messages />
    @notifyJs
</div>


@livewire('livewire-ui-modal')
@livewireScripts
</body>

</html>
