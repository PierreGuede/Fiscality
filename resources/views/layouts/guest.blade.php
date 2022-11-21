<!DOCTYPE html>
<html x-data="data" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <!-- Scripts -->
    <script src="{{ asset('js/init-alpine.js') }}" defer></script>
</head>

<body class="selection:bg-blue-500 selection:text-white" x-data="{ 'showModal': false, 'starting': true, 'buttonok': false, 'showSubCat': false }" @keydown.escape="showModal = false"
    x-cloak>

    <div x-data="globalData" >
        {{ $slot }}
    </div>


    @livewireScripts
    @wireUiScripts

    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
    <script
{{--        amount="20000"--}}
{{--            position="center"--}}
{{--            sandbox="true"--}}
{{--            key="cfa29b803b5611edafa2d398c4589a54"--}}
            src="https://cdn.kkiapay.me/k.js"></script>
</body>

</html>
