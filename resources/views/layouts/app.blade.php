<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPENA - Sistem Informasi Penilaian</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans antialiased">

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Konten --}}
    <main class="p-6">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    @include('components.modal-bukti')

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
  document.addEventListener('alpine:init', () => {
    Alpine.store('popup', {
      open: false,
      data: {},                 // tempat naruh payload (judul komponen, dll)
      show(payload = {}) { this.data = payload; this.open = true; },
      hide() { this.open = false; }
    });
  });
</script>



</body>
</html>
