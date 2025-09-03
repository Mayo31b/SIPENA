<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIPENA — Masuk</title>

    <!-- Tailwind CDN (tanpa Vite) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
      tailwind.config = {
        theme: {
          extend: {
            fontFamily: { inter: ['Inter', 'ui-sans-serif', 'system-ui'] },
            colors: {
              sipena: {
                primary: '#2F63FF',
              }
            },
            dropShadow: {
              soft: '0 10px 25px rgba(0,0,0,0.05)',
            }
          }
        }
      }
    </script>
    <style>
      html,body{height:100%}
    </style>
</head>
<body class="min-h-full bg-[#f6f8fb] font-inter text-slate-700">
  <div class="min-h-screen w-full flex items-center justify-center px-4 py-10">
    <div class="w-full max-w-6xl grid grid-cols-1 lg:grid-cols-2 gap-10">

      <!-- Kartu Ilustrasi Kiri (gradient) -->
      <div class="relative rounded-3xl overflow-hidden p-8 md:p-10 lg:p-12"
           style="background: linear-gradient(135deg,#47d7b6 0%,#6a67f5 45%,#7b46ff 100%);">
        <!-- gelembung dekorasi -->
        <div class="absolute -top-10 -right-10 w-48 h-48 bg-white/10 rounded-full blur-2xl"></div>
        <div class="absolute -bottom-8 -left-8 w-40 h-40 bg-white/10 rounded-full blur-xl"></div>

        <div class="relative text-white space-y-8">
          <div>
            <div class="text-xs/none uppercase tracking-[0.2em] opacity-80">SIPENA</div>
            <h1 class="mt-2 text-lg md:text-xl font-semibold">
              Sistem Informasi Pengelolaan Evaluasi & Arsip
            </h1>
          </div>

          <!-- “Dashboard overview” dummy UI -->
          <div class="space-y-4">
            <div class="grid grid-cols-2 gap-4">
              <div class="h-16 md:h-20 bg-white/15 rounded-xl"></div>
              <div class="h-16 md:h-20 bg-white/15 rounded-xl"></div>
            </div>
            <div class="bg-white/15 rounded-xl p-4">
              <!-- Line chart sederhana (SVG) -->
              <svg viewBox="0 0 320 120" class="w-full h-28">
                <defs>
                  <linearGradient id="glow" x1="0" x2="0" y1="0" y2="1">
                    <stop offset="0%" stop-color="white" stop-opacity="0.9"/>
                    <stop offset="100%" stop-color="white" stop-opacity="0.2"/>
                  </linearGradient>
                </defs>
                <path d="M20 80 L70 60 L120 68 L170 52 L220 78 L270 58"
                      stroke="url(#glow)" stroke-width="3" fill="none" stroke-linecap="round"/>
              </svg>
              <div class="text-[11px] opacity-80">Dashboard overview</div>
            </div>
          </div>

          <p class="pt-4 text-xs md:text-[13px] opacity-90">
            Kelola evaluasi, akses arsip, dan pantau capaian kinerja
          </p>
        </div>
      </div>

      <!-- Form Login Kanan -->
      <div class="relative">
        <div class="bg-white rounded-3xl p-6 md:p-8 lg:p-10 shadow-sm ring-1 ring-slate-200/60">
          <div class="mb-6">
            <h2 class="text-slate-900 font-semibold">Masuk ke SIPENA</h2>
            <p class="text-sm text-slate-500 mt-1">
              Masukkan akunmu untuk mengakses dashboard dan dokumen
            </p>
          </div>

          @if ($errors->any())
            <div class="mb-5 rounded-xl border border-red-200 bg-red-50 text-red-700 px-4 py-3 text-sm">
              {{ $errors->first() }}
            </div>
          @endif

          <form method="POST" action="{{ route('login.post') }}" class="space-y-5">
            @csrf

            <div>
              <label for="email" class="block text-sm font-medium text-slate-700">Username</label>
              <input id="email" name="email" type="email" value="{{ old('email') }}"
                     placeholder="contoh@domain.go.id"
                     class="mt-2 w-full rounded-xl border-slate-200 focus:border-sipena-primary focus:ring-sipena-primary/30
                            bg-white h-11 px-4 text-sm ring-1 ring-inset ring-slate-200 outline-none transition">
            </div>

            <div>
              <label for="password" class="block text-sm font-medium text-slate-700">Kata Sandi</label>
              <input id="password" name="password" type="password" placeholder="••••••••"
                     class="mt-2 w-full rounded-xl border-slate-200 focus:border-sipena-primary focus:ring-sipena-primary/30
                            bg-white h-11 px-4 text-sm ring-1 ring-inset ring-slate-200 outline-none transition">
            </div>

            <div class="flex items-center justify-between">
              <label class="inline-flex items-center gap-2 text-sm text-slate-600">
                <input type="checkbox" name="remember"
                       class="rounded border-slate-300 text-sipena-primary focus:ring-sipena-primary/40">
                Ingat saya
              </label>
              <a href="#" class="text-sm text-slate-500 hover:text-slate-700">Lupa kata sandi?</a>
            </div>

            <button type="submit"
                    class="w-full h-11 rounded-xl bg-sipena-primary text-white font-medium
                           hover:opacity-90 transition drop-shadow-soft">
              Masuk
            </button>
          </form>
        </div>

        <!-- efek “glow” lembut di belakang kartu -->
        <div class="absolute -z-10 inset-0 blur-3xl rounded-3xl bg-gradient-to-r from-[#eaf2ff] to-[#f8f7ff]"></div>
      </div>
    </div>
  </div>
</body>
</html>
