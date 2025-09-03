<nav class="bg-gradient-to-r from-cyan-600 to-indigo-600 p-4 flex justify-between items-center text-white">
    <div class="font-bold text-lg">
        <a href="{{ route('home') }}" class="hover:underline">SIPENA</a>
    </div>
    <ul class="flex space-x-6">
        <li><a href="{{ route('admin.dashboard') }}" class="hover:underline">Dashboard</a></li>
        <li><a href="{{ route('penilai.form') }}"  class="hover:underline">Pengisian LKE</a></li>
        <li><a href="{{ route('penilai.dashboard') }}" class="hover:underline">Halaman SIPENA</a></li>
        
    </ul>
    <div class="bg-indigo-500 px-3 py-1 rounded-lg">Dinas Perpustakaan</div>
</nav>
