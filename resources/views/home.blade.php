@extends('layouts.app')

@section('content')
<div class="space-y-6">

    {{-- Header Atas --}}
    <div class="bg-white rounded-xl shadow p-4 flex justify-between items-center">
        <div>
            <button class="px-4 py-2 bg-cyan-500 text-white rounded-lg">Evaluasi Sedang Berlangsung</button>
            <p class="mt-2 text-gray-600">Evaluasi SIPENA 2025<br>Dimulai Tanggal: 11 Agustus 2025</p>
        </div>
        <div class="flex space-x-8">
            <div class="text-center">
                <div class="text-green-600 font-bold text-xl">100%</div>
                <p class="text-gray-600">Pengisian LKE</p>
            </div>
            <div class="text-center">
                <div class="text-blue-600 font-bold text-xl">94.8%</div>
                <p class="text-gray-600">Penilaian</p>
            </div>
            <div class="text-center">
                <p>Perencanaan<br><span class="font-bold">26.41 / 30</span></p>
            </div>
            <div class="text-center">
                <p>Pengukuran<br><span class="font-bold">27.38 / 30</span></p>
            </div>
        </div>
        <div class="text-sm text-gray-500">
            Selamat Datang — Kamis, 28 Agustus 2025, 10:12
        </div>
    </div>

    {{-- Grafik + Ringkasan --}}
    <div class="grid grid-cols-3 gap-6">
        <div class="col-span-2 bg-white rounded-xl shadow p-4">
            <h2 class="font-semibold text-gray-700 mb-4">
                Grafik Capaian Hasil Evaluasi Akuntabilitas Kinerja (5 Tahun Terakhir)
            </h2>
            <canvas id="grafikCapaian" class="w-full" style="height: 280px;"></canvas>
        </div>
        <div class="bg-white rounded-xl shadow p-4 space-y-4">
            <h2 class="font-semibold text-gray-700">Ringkasan Nilai</h2>
            <p>Nilai Tertinggi <span class="float-right font-bold">88.50</span></p>
            <p>Nilai Terendah <span class="float-right font-bold">45.25</span></p>
            <p>Rata-rata <span class="float-right font-bold">72.40</span></p>
            <hr>
            <h2 class="font-semibold text-gray-700">Rangking SIPENA (5 Teratas)</h2>
            <ol class="list-decimal list-inside text-sm space-y-1">
                <li>Dinas Perpustakaan — 88.50</li>
                <li>Dinas Pendidikan — 86.30</li>
                <li>Dinas Kesehatan — 84.10</li>
                <li>Biro Adm — 82.00</li>
                <li>BKD — 80.75</li>
            </ol>
        </div>
    </div>

    {{-- Daftar Unit --}}
    <div class="grid grid-cols-2 gap-6">
        {{-- Unit Pengolah --}}
        <div class="bg-white rounded-xl shadow p-4">
            <h2 class="font-semibold text-gray-700 mb-4">Daftar Unit Pengolah</h2>
            <table class="w-full text-sm border-collapse">
                <thead>
                    <tr class="border-b">
                        <th class="text-left p-2">No</th>
                        <th class="text-left p-2">Nama Unit</th>
                        <th class="text-left p-2">Progress</th>
                        <th class="text-left p-2">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="p-2">1</td><td>Biro Administrasi</td><td>100%</td><td class="text-green-600">Lengkap</td>
                    </tr>
                    <tr class="border-b">
                        <td class="p-2">2</td><td>Dinas Pendidikan</td><td>75%</td><td class="text-orange-500">Progres</td>
                    </tr>
                    <tr class="border-b">
                        <td class="p-2">3</td><td>Dinas Kesehatan</td><td>92%</td><td class="text-green-600">Lengkap</td>
                    </tr>
                    <tr>
                        <td class="p-2">4</td><td>Dinas Sosial</td><td>60%</td><td class="text-red-600">Belum</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Unit Kearsipan --}}
        <div class="bg-white rounded-xl shadow p-4">
            <h2 class="font-semibold text-gray-700 mb-4">Unit Kearsipan</h2>
            <table class="w-full text-sm border-collapse">
                <thead>
                    <tr class="border-b">
                        <th class="text-left p-2">No</th>
                        <th class="text-left p-2">Nama Unit</th>
                        <th class="text-left p-2">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="p-2">1</td><td>Arsip Provinsi</td><td class="text-green-600">Lengkap</td>
                    </tr>
                    <tr class="border-b">
                        <td class="p-2">2</td><td>Arsip Kabupaten</td><td class="text-orange-500">Progres</td>
                    </tr>
                    <tr class="border-b">
                        <td class="p-2">3</td><td>Arsip Kota</td><td class="text-green-600">Lengkap</td>
                    </tr>
                    <tr>
                        <td class="p-2">4</td><td>Arsip Kecamatan</td><td class="text-red-600">Belum</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
