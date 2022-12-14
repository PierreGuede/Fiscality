@props(['company'])

    <!DOCTYPE html>
<html x-data="data" lang="en">

<head>
    <meta charset="utf-8">
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{--    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>--}}
    @livewireStyles
    @notifyCss
    <!-- Scripts -->
    @wireUiScripts

    <script src="{{ asset('js/init-alpine.js') }}" defer></script>
</head>

<body class="selection:bg-blue-500 font-sans selection:text-white"
      @keydown.escape="showModal = false"
      x-cloak>
<x-notifications position="top-right" />

<div x-data="globalData" class="w-full flex bg-blue-50 max-h-screen overflow-hidden min-h-screen">
    <div>
            <x-sidebar :company="$company" />
    </div>

    <div class=" content p-6 overflow-y-auto w-full ">
        {{ $slot }}
    </div>
</div>

<x:notify-messages/>
@notifyJs

@livewire('livewire-ui-modal')
@livewireScripts
<script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false"></script>
{{--UnpolyJS--}}

{{--Filepond--}}
<script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
<script
    src="https://cdn.kkiapay.me/k.js"></script>
</body>

</html>
