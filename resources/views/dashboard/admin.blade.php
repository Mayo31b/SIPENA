@extends('layouts.app')

@section('content')
<div x-data="{ openModal: false, selectedUnit: '' }" class="space-y-6">

    {{-- Salam --}}
    <h1 class="text-xl font-semibold text-gray-700">Halo, Admin SIPENA</h1>

    {{-- Tombol Atas --}}
    <div class="flex space-x-4">
        <button class="px-4 py-2 bg-cyan-500 text-white rounded-lg shadow">Ambil Data Tahun Lalu</button>
        <button @click="openModal = true; selectedUnit = 'Form Kearsipan'" class="px-4 py-2 bg-purple-500 text-white rounded-lg shadow">Edit Form Kearsipan</button>
    </div>

    {{-- Progress --}}
    <div class="grid grid-cols-2 gap-6">
        <div class="bg-white rounded-xl shadow p-4">
            <p class="font-semibold">Progress Pengisian LKE</p>
            <p class="text-green-600 font-bold text-2xl">100%</p>
            <div class="w-full bg-gray-200 h-2 rounded mt-2">
                <div class="bg-green-500 h-2 rounded" style="width: 100%"></div>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow p-4">
            <p class="font-semibold">Progress Penilaian Evaluator</p>
            <p class="text-blue-600 font-bold text-2xl">94.81%</p>
            <div class="w-full bg-gray-200 h-2 rounded mt-2">
                <div class="bg-blue-500 h-2 rounded" style="width: 94.81%"></div>
            </div>
        </div>
    </div>

    {{-- Grafik + Rangking --}}
    <div class="grid grid-cols-3 gap-6">
        <div class="col-span-2 bg-white rounded-xl shadow p-4">
            <h2 class="font-semibold text-gray-700 mb-4">Grafik Capaian (5 Tahun Terakhir)</h2>
            <canvas id="grafikAdmin" class="w-full" style="height:300px;"></canvas>
        </div>
        <div class="bg-white rounded-xl shadow p-4">
            <h2 class="font-semibold text-gray-700 mb-4">Rangking Evaluasi (5 Teratas)</h2>
            <select class="w-full border rounded px-2 py-1 mb-3">
                <option>Pilih Jadwal Evaluasi</option>
            </select>
            <ol class="list-decimal list-inside space-y-1 text-gray-700">
                <li>Dinas A — 92.4</li>
                <li>Dinas B — 90.1</li>
                <li>Dinas C — 89.7</li>
            </ol>
        </div>
    </div>

    {{-- Unit Pengolah + Kearsipan --}}
    <div class="grid grid-cols-2 gap-6">
        <div class="bg-white rounded-xl shadow p-4">
            <h2 class="font-semibold text-gray-700 mb-4">Unit Pengolah</h2>
            <table class="w-full text-sm border-collapse">
                <thead>
                    <tr class="border-b">
                        <th class="text-left p-2">No</th>
                        <th class="text-left p-2">Nama Unit</th>
                        <th class="text-left p-2">Status</th>
                        <th class="text-left p-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="p-2">1</td>
                        <td>Biro Administrasi</td>
                        <td class="text-green-600">Lengkap</td>
                        <td>
                            <button @click="openModal = true; selectedUnit = 'Biro Administrasi'" class="px-3 py-1 bg-purple-500 text-white rounded">Edit</button>
                        </td>
                    </tr>
                    <tr class="border-b">
                        <td class="p-2">2</td>
                        <td>Dinas Pendidikan</td>
                        <td class="text-red-500">Belum Lengkap</td>
                        <td>
                            <button @click="openModal = true; selectedUnit = 'Dinas Pendidikan'" class="px-3 py-1 bg-purple-500 text-white rounded">Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2">3</td>
                        <td>Dinas Kesehatan</td>
                        <td class="text-green-600">Lengkap</td>
                        <td>
                            <button @click="openModal = true; selectedUnit = 'Dinas Kesehatan'" class="px-3 py-1 bg-purple-500 text-white rounded">Edit</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="bg-white rounded-xl shadow p-4">
            <h2 class="font-semibold text-gray-700 mb-4">Unit Kearsipan</h2>
            <table class="w-full text-sm border-collapse">
                <thead>
                    <tr class="border-b">
                        <th class="text-left p-2">No</th>
                        <th class="text-left p-2">Nama Unit</th>
                        <th class="text-left p-2">Status</th>
                        <th class="text-left p-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="p-2">1</td>
                        <td>Arsip Provinsi</td>
                        <td class="text-green-600">Lengkap</td>
                        <td>
                            <button @click="openModal = true; selectedUnit = 'Arsip Provinsi'" class="px-3 py-1 bg-purple-500 text-white rounded">Edit</button>
                        </td>
                    </tr>
                    <tr class="border-b">
                        <td class="p-2">2</td>
                        <td>Arsip Kabupaten</td>
                        <td class="text-red-500">Belum Lengkap</td>
                        <td>
                            <button @click="openModal = true; selectedUnit = 'Arsip Kabupaten'" class="px-3 py-1 bg-purple-500 text-white rounded">Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2">3</td>
                        <td>Arsip Kota</td>
                        <td class="text-green-600">Lengkap</td>
                        <td>
                            <button @click="openModal = true; selectedUnit = 'Arsip Kota'" class="px-3 py-1 bg-purple-500 text-white rounded">Edit</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Overlay + Modal -->
    <div x-show="openModal" 
         x-cloak
         class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">

        <div @click.away="openModal = false"
             class="bg-white rounded-lg shadow-lg w-2/3 p-6 relative">

            <h2 class="text-lg font-semibold mb-4">Editor Form Kearsipan — <span x-text="selectedUnit"></span></h2>

            <!-- Form isiannya -->
            <form class="space-y-4">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="text-sm font-medium">Label Field</label>
                        <input type="text" class="w-full border rounded p-2">
                    </div>
                    <div>
                        <label class="text-sm font-medium">Tipe Field</label>
                        <input type="text" class="w-full border rounded p-2">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="text-sm font-medium">Nomor Arsip</label>
                        <input type="text" class="w-full border rounded p-2 bg-orange-50">
                    </div>
                    <div>
                        <label class="text-sm font-medium">Tanggal Arsip</label>
                        <input type="date" class="w-full border rounded p-2 bg-orange-50">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="text-sm font-medium">Jenis Dokumen</label>
                        <input type="text" class="w-full border rounded p-2">
                    </div>
                    <div>
                        <label class="text-sm font-medium">Penyimpan / Lokasi</label>
                        <input type="text" class="w-full border rounded p-2 bg-orange-50">
                    </div>
                </div>

                <div>
                    <label class="text-sm font-medium">Tags (pisah koma)</label>
                    <input type="text" class="w-full border rounded p-2">
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="text-sm font-medium">Hak Akses</label>
                        <input type="text" class="w-full border rounded p-2">
                    </div>
                    <div>
                        <label class="text-sm font-medium">Keterangan / Instruksi</label>
                        <textarea class="w-full border rounded p-2"></textarea>
                    </div>
                </div>

                <!-- Tombol Aksi -->
                <div class="flex justify-end space-x-3 mt-6">
                    <button type="button" 
                            @click="openModal = false"
                            class="px-4 py-2 bg-gray-200 text-gray-700 rounded">
                        Batal
                    </button>
                    <button type="submit" 
                            class="px-4 py-2 bg-cyan-600 text-white rounded">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>

{{-- Alpine.js --}}
<script src="//unpkg.com/alpinejs" defer></script>
@endsection
