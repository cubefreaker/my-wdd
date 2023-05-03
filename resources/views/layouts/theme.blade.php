<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    {{-- <link rel="icon" type="image/ico" href="/icon.ico" /> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="/leafletjs/leaflet.css">
    <script src="/leafletjs/leaflet.js"></script>
    <script src="/add-to-calendar.min.js" async defer></script>
    
    <title>{{ $title ?? 'Theme' }}</title>
    
    <!-- Scripts -->
    @vite(['resources/css/theme.css', 'resources/js/theme.js'])
    <livewire:styles />
  </head>
  <body>
    {{ $slot }}
  </body>
</html>
