<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="./src/style.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    <title>{{ $title }} | {{ $toko->nama }}</title>
    <style>
      .shadow-mentari::-webkit-scrollbar, .list-pesanan::-webkit-scrollbar, .pelanggan::-webkit-scrollbar, .pelanggan-bayar::-webkit-scrollbar, .sakat::-webkit-scrollbar {
        width: 0;
      }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>