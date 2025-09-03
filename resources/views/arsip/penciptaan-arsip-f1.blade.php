{{-- resources/views/arsip/penciptaan-arsip-multistep.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penciptaan Arsip - Form Multi Step</title>
    @vite('resources/css/app.css')
    <!-- Alpine.js -->
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">

    <div x-data="{ step: 1 }" class="bg-white border-2 border-blue-400 rounded-xl shadow-md p-8 w-full max-w-4xl relative">

        <!-- Tombol Kembali ke Home -->
        <a href="{{ url('/') }}" 
           class="absolute top-4 left-4 flex items-center justify-center w-10 h-10 bg-blue-600 hover:bg-blue-700 text-white rounded-full shadow">
            <svg xmlns="http://www.w3.org/2000/svg" 
                 fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" 
                 class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
        </a>

        <!-- STEP 1: Identitas Instansi -->
        <div x-show="step === 1">
            <h2 class="text-center text-blue-700 font-bold italic mb-6 text-lg">
                Identitas Instansi
            </h2>
            <form @submit.prevent="step = 2" class="space-y-4 text-sm">
                <div class="flex items-center">
                    <label class="w-48">Nama Instansi:</label>
                    <input type="text" class="border flex-1 px-3 py-1 rounded">
                </div>
                <div class="flex items-center">
                    <label class="w-48">Unit Pengolah:</label>
                    <input type="text" class="border flex-1 px-3 py-1 rounded">
                </div>
                <div class="flex items-start">
                    <label class="w-48 pt-2">Alamat:</label>
                    <textarea class="border flex-1 px-3 py-1 rounded"></textarea>
                </div>
                <div class="flex items-center">
                    <label class="w-48">Nama Penanggung Jawab:</label>
                    <input type="text" class="border flex-1 px-3 py-1 rounded">
                </div>
                <div class="flex items-center">
                    <label class="w-48">Jumlah Arsiparis:</label>
                    <input type="number" class="border w-32 px-3 py-1 rounded">
                </div>
                <div class="flex items-center">
                    <label class="w-48">Jumlah Pengelola Arsip:</label>
                    <input type="number" class="border w-32 px-3 py-1 rounded">
                </div>
                <div class="text-right">
                    <button type="submit" 
                            class="px-6 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg">
                        Selanjutnya
                    </button>
                </div>
            </form>
        </div>

        <!-- STEP 2: Pengelolaan Arsip Dinamis -->
        <div x-show="step === 2">
            <h2 class="text-center text-blue-700 font-bold italic mb-6 text-lg">
                Pengelolaan Arsip Dinamis
            </h2>
            <form @submit.prevent="step = 3" class="space-y-6 text-sm">
                <!-- Item 1 -->
                <div class="grid grid-cols-3 gap-4 items-start">
                    <div class="col-span-2">
                        <p class="font-semibold">1. Penomoran Naskah Dinas</p>
                        <p class="ml-4">Pemberian Nomor Naskah sesuai dengan Susunan Penomoran Naskah Dinas</p>
                        <p class="ml-4">Isikan jumlah naskah dinas yang dijadikan sampel</p> 
                        <p class="ml-4">Isikan jumlah naskah dinas dari sampel yang sesuai</p>
                    </div>
                    <div class="flex flex-col gap-3 justify-center">
                        <input type="checkbox" class="w-5 h-5">
                        <input type="checkbox" class="w-5 h-5">
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="grid grid-cols-3 gap-4 items-start">
                    <div class="col-span-2">
                        <p class="font-semibold">A. Surat Perintah</p>
                        <p class="ml-4">Isikan jumlah naskah dinas yang dijadikan sampel</p>
                        <p class="ml-4">Isikan jumlah naskah dinas dari sampel yang sesuai</p>
                    </div>
                    <div class="flex flex-col gap-3 justify-center">
                        <input type="checkbox" class="w-5 h-5">
                        <input type="checkbox" class="w-5 h-5">
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="grid grid-cols-3 gap-4 items-start">
                    <div class="col-span-2">
                        <p class="font-semibold">B. Surat Dinas</p>
                        <p class="ml-4">Isikan jumlah naskah dinas yang dijadikan sampel</p>
                        <p class="ml-4">Isikan jumlah naskah dinas dari sampel yang sesuai</p>
                    </div>
                    <div class="flex flex-col gap-3 justify-center">
                        <input type="checkbox" class="w-5 h-5">
                        <input type="checkbox" class="w-5 h-5">
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="grid grid-cols-3 gap-4 items-start">
                    <div class="col-span-2">
                        <p class="font-semibold">C. Nota Dinas</p>
                        <p class="ml-4">Isikan jumlah naskah dinas yang dijadikan sampel</p>
                        <p class="ml-4">Isikan jumlah naskah dinas dari sampel yang sesuai</p>
                    </div>
                    <div class="flex flex-col gap-3 justify-center">
                        <input type="checkbox" class="w-5 h-5">
                        <input type="checkbox" class="w-5 h-5">
                    </div>
                </div>
                <!-- Input bawah -->
                <div class="flex gap-6 mt-6">
                    <div>
                        <label>Jumlah Sampel:</label>
                        <input type="number" class="border px-3 py-1 rounded w-32">
                    </div>
                    <div>
                        <label>Jumlah Sesuai:</label>
                        <input type="number" class="border px-3 py-1 rounded w-32">
                    </div>
                </div>
                <!-- Navigasi -->
                <div class="flex justify-between mt-6">
                    <button type="button" @click="step = 1"
                            class="px-6 py-2 bg-gray-400 hover:bg-gray-500 text-white rounded-lg">
                        Sebelumnya
                    </button>
                    <button type="submit" 
                            class="px-6 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg">
                        Selanjutnya
                    </button>
                </div>
            </form>
        </div>

        <!-- STEP 3: Penggunaan Kertas Naskah -->
        <div x-show="step === 3">
            <h2 class="text-center text-xl font-semibold text-blue-700 mb-6">
                Pengelolaan Arsip Dinamis
            </h2>
            <form @submit.prevent="step = 4" class="space-y-6 text-sm">
                <div class="space-y-4">
                    <h3 class="font-medium text-gray-800">2. Penggunaan Kertas Naskah</h3>
                    <!-- A. Ukuran Kertas -->
                    <div class="ml-4 space-y-3">
                        <p class="font-medium">A. Ukuran Kertas</p>
                        <div class="flex justify-between items-center">
                            <label class="text-gray-700">Isikan jumlah naskah dinas yang dijadikan sampel</label>
                            <input type="checkbox" class="w-5 h-5">
                        </div>
                        <div class="flex justify-between items-center">
                            <label class="text-gray-700">Isikan jumlah naskah dinas dari sampel yang sesuai</label>
                            <input type="checkbox" class="w-5 h-5">
                        </div>
                    </div>
                    <!-- B. Gramatur -->
                    <div class="ml-4 space-y-3">
                        <p class="font-medium">B. Gramatur (Berat Kertas)</p>
                        <div class="flex justify-between items-center">
                            <label class="text-gray-700">Isikan jumlah naskah dinas yang dijadikan sampel</label>
                            <input type="checkbox" class="w-5 h-5">
                        </div>
                        <div class="flex justify-between items-center">
                            <label class="text-gray-700">Isikan jumlah naskah dinas dari sampel yang sesuai</label>
                            <input type="checkbox" class="w-5 h-5">
                        </div>
                    </div>
                </div>
                <!-- Tombol Navigasi -->
                <div class="flex justify-between items-center pt-6">
                    <button type="button" @click="step = 2"
                        class="px-6 py-2 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded-lg shadow">
                        Sebelumnya
                    </button>
                    <button type="submit" 
                        class="px-6 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg shadow">
                        Selanjutnya
                    </button>
                </div>
            </form>
        </div>

        <!-- STEP 4: Struktur Naskah Dinas -->
        <div x-show="step === 4">
            <h2 class="text-center text-xl font-semibold text-blue-700 mb-6">
                Pengelolaan Arsip Dinamis
            </h2>
            <form @submit.prevent="step = 5" class="space-y-6 text-sm">
                <div class="space-y-4">
                    <h3 class="font-medium text-gray-800">3. Struktur Naskah Dinas</h3>
                    <!-- A. Kepala Naskah -->
                    <div class="ml-4 space-y-3">
                        <p class="font-medium">A. Kepala Naskah Dinas</p>
                        <div class="flex justify-between items-center">
                            <label class="text-gray-700">Isikan jumlah naskah dinas yang dijadikan sampel</label>
                            <input type="checkbox" class="w-5 h-5">
                        </div>
                        <div class="flex justify-between items-center">
                            <label class="text-gray-700">Isikan jumlah naskah dinas dari sampel yang sesuai</label>
                            <input type="checkbox" class="w-5 h-5">
                        </div>
                    </div>
                    <!-- B. Batang Tubuh -->
                    <div class="ml-4 space-y-3">
                        <p class="font-medium">B. Batang Tubuh / Isi Naskah Dinas</p>
                        <div class="flex justify-between items-center">
                            <label class="text-gray-700">Isikan jumlah naskah dinas yang dijadikan sampel</label>
                            <input type="checkbox" class="w-5 h-5">
                        </div>
                        <div class="flex justify-between items-center">
                            <label class="text-gray-700">Isikan jumlah naskah dinas dari sampel yang sesuai</label>
                            <input type="checkbox" class="w-5 h-5">
                        </div>
                    </div>
                    <!-- C. Kaki Naskah -->
                    <div class="ml-4 space-y-3">
                        <p class="font-medium">C. Kaki Naskah Dinas</p>
                        <div class="flex justify-between items-center">
                            <label class="text-gray-700">Isikan jumlah naskah dinas yang dijadikan sampel</label>
                            <input type="checkbox" class="w-5 h-5">
                        </div>
                        <div class="flex justify-between items-center">
                            <label class="text-gray-700">Isikan jumlah naskah dinas dari sampel yang sesuai</label>
                            <input type="checkbox" class="w-5 h-5">
                        </div>
                    </div>
                </div>
                <!-- Tombol Navigasi -->
                <div class="flex justify-between items-center pt-6">
                    <button type="button" @click="step = 3"
                        class="px-6 py-2 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded-lg shadow">
                        Sebelumnya
                    </button>
                    <button type="submit" 
                        class="px-6 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg shadow">
                        Selanjutnya
                    </button>
                </div>
            </form>
        </div>

        <!-- STEP 5: Format Naskah Dinas -->
        <div x-show="step === 5">
            <h2 class="text-center text-xl font-semibold text-blue-700 mb-6">
                Pengelolaan Arsip Dinamis
            </h2>
            <form @submit.prevent="step = 6"  class="space-y-6 text-sm">
                <div class="space-y-4">
                    <h3 class="font-medium text-gray-800">4. Format Naskah Dinas</h3>
                    <!-- A. Jenis Huruf -->
                    <div class="ml-4 space-y-3">
                        <p class="font-medium">A. Jenis Huruf</p>
                        <div class="flex justify-between items-center">
                            <label class="text-gray-700">Isikan jumlah naskah dinas yang dijadikan sampel</label>
                            <input type="checkbox" class="w-5 h-5">
                        </div>
                        <div class="flex justify-between items-center">
                            <label class="text-gray-700">Isikan jumlah naskah dinas dari sampel yang sesuai</label>
                            <input type="checkbox" class="w-5 h-5">
                        </div>
                    </div>
                    <!-- B. Ukuran Huruf -->
                    <div class="ml-4 space-y-3">
                        <p class="font-medium">B. Ukuran Huruf</p>
                        <div class="flex justify-between items-center">
                            <label class="text-gray-700">Isikan jumlah naskah dinas yang dijadikan sampel</label>
                            <input type="checkbox" class="w-5 h-5">
                        </div>
                        <div class="flex justify-between items-center">
                            <label class="text-gray-700">Isikan jumlah naskah dinas dari sampel yang sesuai</label>
                            <input type="checkbox" class="w-5 h-5">
                        </div>
                    </div>
                    <!-- C. Kata Penyambung -->
                    <div class="ml-4 space-y-3">
                        <p class="font-medium">C. Kata Penyambung Perpindahan Halaman</p>
                        <div class="flex justify-between items-center">
                            <label class="text-gray-700">Isikan jumlah naskah dinas yang dijadikan sampel</label>
                            <input type="checkbox" class="w-5 h-5">
                        </div>
                        <div class="flex justify-between items-center">
                            <label class="text-gray-700">Isikan jumlah naskah dinas dari sampel yang sesuai</label>
                            <input type="checkbox" class="w-5 h-5">
                        </div>
                    </div>
                </div>

                <!-- Tombol Navigasi -->
                <div class="flex justify-between items-center pt-6">
                    <button type="button" @click="step = 4"
                        class="px-6 py-2 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded-lg shadow">
                        Sebelumnya
                    </button>
                    <button type="submit" 
                        class="px-6 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg shadow">
                        Selanjutnya
                    </button>
                </div>
</div>
            </form>
          <!-- STEP 6: Penentuan Batas/Ruang Tepi -->
<div x-show="step === 6">
    <h2 class="text-center text-xl font-semibold text-blue-700 mb-6">
        Pengelolaan Arsip Dinamis
    </h2>

    <form @submit.prevent="step = 7" class="space-y-6 text-sm">
        
        <!-- A. Penentuan Batas/Ruang Tepi -->
        <div class="space-y-2">
            <p class="font-medium">A. Penentuan Batas/Ruang Tepi</p>
            <div class="flex items-center justify-between">
                <label>Isikan jumlah naskah dinas yang dijadikan sampel</label>
                <input type="checkbox" class="w-5 h-5">
            </div>
            <div class="flex items-center justify-between">
                <label>Isikan jumlah naskah dinas dari sampel yang sesuai</label>
                <input type="checkbox" class="w-5 h-5">
            </div>
        </div>

        <!-- B. Nomor Halaman -->
        <div class="space-y-2">
            <p class="font-medium">B. Nomor Halaman</p>
            <div class="flex items-center justify-between">
                <label>Isikan jumlah naskah dinas yang dijadikan sampel</label>
                <input type="checkbox" class="w-5 h-5">
            </div>
            <div class="flex items-center justify-between">
                <label>Isikan jumlah naskah dinas dari sampel yang sesuai</label>
                <input type="checkbox" class="w-5 h-5">
            </div>
        </div>

        <!-- C. Tembusan -->
        <div class="space-y-2">
            <p class="font-medium">C. Tembusan</p>
            <div class="flex items-center justify-between">
                <label>Isikan jumlah naskah dinas yang dijadikan sampel</label>
                <input type="checkbox" class="w-5 h-5">
            </div>
            <div class="flex items-center justify-between">
                <label>Isikan jumlah naskah dinas dari sampel yang sesuai</label>
                <input type="checkbox" class="w-5 h-5">
            </div>
        </div>

        <!-- Tombol Navigasi -->
        <div class="flex justify-between items-center pt-6">
            <button type="button" @click="step = 5"
                class="px-6 py-2 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded-lg shadow">
                Sebelumnya
            </button>
            <button type="submit"
                class="px-6 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg shadow">
                Selanjutnya
            </button>
        </div>
    </form>
</div>

<!-- STEP 7: Pengelolaan Arsip Dinamis -->
<div x-show="step === 7" class="border border-blue-400 rounded-2xl p-8">
    <h2 class="text-center text-xl font-semibold text-blue-700 mb-6">
        Pengelolaan Arsip Dinamis
    </h2>

    <form @submit.prevent="step = 8" class="space-y-6 text-sm">
        
        <!-- A. Lampiran -->
        <div class="space-y-2">
            <p class="font-medium">A. Lampiran</p>
            <div class="flex items-center justify-between">
                <label>Isikan jumlah naskah dinas yang dijadikan sampel</label>
                <input type="checkbox" class="w-5 h-5">
            </div>
            <div class="flex items-center justify-between">
                <label>Isikan jumlah naskah dinas dari sampel yang sesuai</label>
                <input type="checkbox" class="w-5 h-5">
            </div>
        </div>

        <!-- B. Penggunaan Logo Lembaga/Lambang Negara -->
        <div class="space-y-2">
            <p class="font-medium">B. Penggunaan Logo Lembaga/Lambang Negara</p>
            <div class="flex items-center justify-between">
                <label>Isikan jumlah naskah dinas yang dijadikan sampel</label>
                <input type="checkbox" class="w-5 h-5">
            </div>
            <div class="flex items-center justify-between">
                <label>Isikan jumlah naskah dinas dari sampel yang sesuai</label>
                <input type="checkbox" class="w-5 h-5">
            </div>
        </div>

        <!-- C. Pembubuhan Paraf pada Net Naskah Dinas -->
        <div class="space-y-2">
            <p class="font-medium">C. Pembubuhan Paraf pada Net Naskah Dinas</p>
            <div class="flex items-center justify-between">
                <label>Isikan jumlah naskah dinas yang dijadikan sampel</label>
                <input type="checkbox" class="w-5 h-5">
            </div>
            <div class="flex items-center justify-between">
                <label>Isikan jumlah naskah dinas dari sampel yang sesuai</label>
                <input type="checkbox" class="w-5 h-5">
            </div>
        </div>

        <!-- Tombol Navigasi -->
        <div class="flex justify-between items-center pt-6">
            <button type="button" @click="step = 6"
                class="px-6 py-2 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded-lg shadow">
                Sebelumnya
            </button>
            <button type="submit"
                class="px-6 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg shadow">
                Selanjutnya
            </button>
        </div>
    </form>
</div>

<!-- Step 8 -->
<div x-show="step === 8" class="p-6 rounded-2xl border border-blue-400 shadow-md bg-white">
    <h2 class="text-center text-xl font-semibold text-blue-800 mb-6">
        Pengelolaan Arsip Dinamis
    </h2>
    <form @submit.prevent="step = 9" class="space-y-6 text-sm">
        <!-- 5. Penandatanganan Naskah Dinas -->
        <div class="space-y-6">
            <!-- Bagian 5 -->
            <div>
                <p class="font-medium">5. Penandatanganan Naskah Dinas</p>
                <div class="flex items-center justify-between mt-2">
                    <label>Isikan jumlah naskah dinas yang dijadikan sampel</label>
                    <input type="checkbox" name="penandatanganan_sampel" value="1" class="w-5 h-5 border rounded">
                </div>
                <div class="flex items-center justify-between mt-2">
                    <label>Isikan jumlah naskah dinas dari sampel yang sesuai</label>
                    <input type="checkbox" name="penandatanganan_sesuai" value="1" class="w-5 h-5 border rounded">
                </div>
            </div>

            <!-- A. Kewenangan Penandatanganan -->
            <div>
                <p class="font-medium">A. Kewenangan Penandatanganan Naskah Dinas</p>
                <div class="flex items-center justify-between mt-2">
                    <label>Isikan jumlah naskah dinas yang dijadikan sampel</label>
                    <input type="checkbox" name="kewenangan_sampel" value="1" class="w-5 h-5 border rounded">
                </div>
                <div class="flex items-center justify-between mt-2">
                    <label>Isikan jumlah naskah dinas dari sampel yang sesuai</label>
                    <input type="checkbox" name="kewenangan_sesuai" value="1" class="w-5 h-5 border rounded">
                </div>
            </div>

            <!-- C. Pelimpahan Wewenang -->
            <div>
                <p class="font-medium">
                    C. Pelimpahan Wewenang Penandatanganan Naskah Dinas (a.n., u.b., plt., plh.)
                </p>
                <div class="flex items-center justify-between mt-2">
                    <label>Isikan jumlah naskah dinas yang dijadikan sampel</label>
                    <input type="checkbox" name="pelimpahan_sampel" value="1" class="w-5 h-5 border rounded">
                </div>
                <div class="flex items-center justify-between mt-2">
                    <label>Isikan jumlah naskah dinas dari sampel yang sesuai</label>
                    <input type="checkbox" name="pelimpahan_sesuai" value="1" class="w-5 h-5 border rounded">
                </div>
            </div>
        </div>

        <!-- Tombol Navigasi -->
        <div class="flex justify-between mt-10">
            <button type="button" @click="step = 7"
                    class="px-6 py-2 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded-lg shadow">
                Sebelumnya
            </button>
            <button type="submit"
                    class="px-6 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg shadow">
                Selanjutnya
            </button>
        </div>
    </form>
</div>

<!-- Step 9 -->
<div x-show="step === 9" class="p-6 rounded-2xl border border-blue-400 shadow-md bg-white">
    <h2 class="text-center text-xl font-semibold text-blue-800 mb-6">
        Pengelolaan Arsip Dinamis
    </h2>
    <form @submit.prevent="step = 10" class="space-y-6 text-sm">
        <div class="text-gray-700 space-y-4">
            <p><span class="font-medium">6. Pengamanan Naskah Dinas</span></p>
            <p>Pemberian Kode Derajat Klasifikasi Keamanan</p>

            <div class="space-y-2">
                <label class="flex items-center gap-3">
                    <input type="checkbox" name="keamanan[]" value="SR" class="w-5 h-5 border-gray-300 rounded" />
                    <span>Sangat Rahasia (SR)</span>
                </label>
                <label class="flex items-center gap-3">
                    <input type="checkbox" name="keamanan[]" value="R" class="w-5 h-5 border-gray-300 rounded" />
                    <span>Rahasia (R)</span>
                </label>
                <label class="flex items-center gap-3">
                    <input type="checkbox" name="keamanan[]" value="T" class="w-5 h-5 border-gray-300 rounded" />
                    <span>Terbatas (T)</span>
                </label>
                <label class="flex items-center gap-3">
                    <input type="checkbox" name="keamanan[]" value="B" class="w-5 h-5 border-gray-300 rounded" />
                    <span>Biasa (B)</span>
                </label>
            </div>

            <p class="mt-4">Pemberian Nomor Seri Pengaman dan Security Printing</p>
        </div>

        <!-- Navigasi -->
        <div class="flex justify-between mt-10">
            <button type="button" @click="step = 8"
                    class="px-6 py-2 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded-lg shadow">
                Sebelumnya
            </button>
            <button type="submit"
                    class="px-6 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg shadow">
                Selanjutnya
            </button>
        </div>
    </form>
</div>




<!-- Step 10 -->
<div x-show="step === 10" class="p-6 bg-white rounded-2xl shadow-md">
    <h2 class="text-center text-lg font-bold text-black mb-6">
        7. PENGENDALIAN NASKAH DINAS KELUAR
    </h2>
    <form @submit.prevent="step = 10" class="space-y-6 text-sm">
    <div class="space-y-4 text-sm">
        <!-- A. Pencatatan -->
        <div>
            <p class="font-semibold">A. Pencatatan :</p>
            <div class="ml-4 space-y-2">
                <label class="flex items-center space-x-2">
                    <input type="checkbox" class="w-4 h-4 text-blue-600">
                    <span>Buku Agenda</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="checkbox" class="w-4 h-4 text-blue-600">
                    <span>Kartu Kendali</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="checkbox" class="w-4 h-4 text-blue-600">
                    <span>Takah</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="checkbox" class="w-4 h-4 text-blue-600">
                    <span>Agenda Elektronik</span>
                </label>
            </div>
        </div>

        <!-- B. Penggandaan -->
        <div>
            <p class="font-semibold">B. Penggandaan</p>
            <div class="ml-4">
                <label class="flex items-center space-x-2">
                    <input type="checkbox" class="w-4 h-4 text-blue-600">
                    <span>Ya</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="checkbox" class="w-4 h-4 text-blue-600">
                    <span>Tidak</span>
                </label>
            </div>
        </div>

        <!-- C. Pengiriman -->
        <div>
            <p class="font-semibold">C. Pengiriman</p>
            <div class="ml-4">
                <label class="flex items-center space-x-2">
                    <input type="checkbox" class="w-4 h-4 text-blue-600">
                    <span>Ya</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="checkbox" class="w-4 h-4 text-blue-600">
                    <span>Tidak</span>
                </label>
            </div>
        </div>

        <!-- D. Penyimpanan -->
        <div>
            <p class="font-semibold">D. Penyimpanan</p>
            <div class="ml-4">
                <label class="flex items-center space-x-2">
                    <input type="checkbox" class="w-4 h-4 text-blue-600">
                    <span>Ya</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="checkbox" class="w-4 h-4 text-blue-600">
                    <span>Tidak</span>
                </label>
            </div>
        </div>

        <!-- E. Penggunaan Amplop -->
        <div>
            <p class="font-semibold">E. Penggunaan Amplop</p>
            <div class="ml-4">
                <label class="flex items-center space-x-2">
                    <input type="checkbox" class="w-4 h-4 text-blue-600">
                    <span>Ya</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="checkbox" class="w-4 h-4 text-blue-600">
                    <span>Tidak</span>
                </label>
            </div>
        </div>
    </div>

    <!-- Tombol Navigasi -->
    <div class="flex justify-between mt-10">
            <button type="button" @click="step = 9"
                    class="px-6 py-2 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded-lg shadow">
                Sebelumnya
            </button>
            <button type="submit"
                    class="px-6 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg shadow">
                Selanjutnya
            </button>
        </div>
</div>


    </div>
</body>
</html>
