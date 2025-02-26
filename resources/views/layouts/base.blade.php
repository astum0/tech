<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Название страницы' }} - {{ config('app.name') }}</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
        @theme{
            --color-card:rgba(151, 170, 198, 1);
            --color-text-link:rgba(23, 52, 131, 1);
            --color-text-bg:rgba(240, 243, 247, 1);
        }
    </style>
</head>
<body class="max-w-1160 text-base font-normal bg-gray-200 max-w-screen">
    @include('layouts.partials.header')
    {{ $slot }}
</body>
</html>
