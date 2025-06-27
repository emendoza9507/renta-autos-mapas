<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ $title ?? config('app.name') }}</title>

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">

<link rel="preconnect" href="https://fonts.bunny.net">
{{-- <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}

<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">

<!-- Leaflet -->
<link rel="stylesheet" href="{{ asset('leaflet.css') }}">
<script src="{{ asset('leaflet.js') }}"></script>

@vite(['resources/css/app.css', 'resources/js/app.js'])
@fluxAppearance
