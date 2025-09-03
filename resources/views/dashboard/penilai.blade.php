@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto space-y-6">

    {{-- Header --}}
    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-xl font-semibold text-gray-800">Dashboard Evaluasi Dinas</h1>
            <p class="text-gray-500">Ringkasan dan list unit dinas dengan evaluasi per tahun</p>
        </div>
        <span class="text-gray-500">Tanggal: 28 Agustus 2025</span>
    </div>

    {{-- Statistik --}}
    <div class="grid grid-cols-3 gap-6">
        <div class="bg-white shadow rounded-xl p-4">
            <p class="text-gray-500">Total Unit Dinas</p>
            <h2 class="text-2xl font-bold">128</h2>
            <p class="text-green-600 text-sm">+4.6% dari tahun lalu</p>
        </div>
        <div class="bg-white shadow rounded-xl p-4">
            <p class="text-gray-500">Rata-rata Nilai (2025)</p>
            <h2 class="text-2xl font-bold">78.4</h2>
            <p class="text-blue-600 text-sm">Skor naik 2.1%</p>
        </div>
        <div class="bg-white shadow rounded-xl p-4">
            <p class="text-gray-500">Proporsi Lengkap</p>
            <h2 class="text-2xl font-bold">72%</h2>
            <p class="text-green-600 text-sm">92 unit lengkap</p>
        </div>
    </div>

    {{-- Chart & Top 5 --}}
    <div class="grid grid-cols-3 gap-6">
        <div class="col-span-2 bg-white rounded-xl shadow p-4">
            <h2 class="font-semibold text-gray-700 mb-2">Grafik Tren Evaluasi Per Tahun (Rata-rata)</h2>
            <canvas id="trendChart" height="120"></canvas>
        </div>
        <div class="bg-white rounded-xl shadow p-4 space-y-4">
            <h2 class="font-semibold text-gray-700">Top 5 Dinas (2025)</h2>
            <ul class="list-decimal list-inside space-y-1 text-sm text-gray-700">
                <li>Dinas Kesehatan — <span class="font-semibold">91.2%</span></li>
                <li>Dinas Pendidikan — <span class="font-semibold">89.3%</span></li>
                <li>Biro Administrasi — <span class="font-semibold">88.0%</span></li>
                <li>Dinas Sosial — <span class="font-semibold">86.5%</span></li>
                <li>Dinas Perhubungan — <span class="font-semibold">85.7%</span></li>
            </ul>
            <div class="pt-2">
                <label for="filter" class="block text-sm font-medium text-gray-600">Filter</label>
                <div class="flex space-x-2 mt-1">
                    <input type="text" id="filter" placeholder="Cari nama dinas..."
                           class="flex-1 border rounded p-2 text-sm">
                    <button class="px-4 py-2 bg-cyan-600 text-white rounded">Terapkan</button>
                </div>
            </div>
        </div>
    </div>

    {{-- List Tabel --}}
    <div class="bg-white shadow rounded-xl p-4">
        <h2 class="font-semibold text-gray-700 mb-2">List Unit Dinas — Evaluasi per Tahun</h2>
        <p class="text-sm text-gray-500 mb-4">Tampilkan evaluasi tiap tahun (2021-2025) dan persentase rata-rata</p>
        <table class="w-full text-sm border-collapse">
            <thead>
                <tr class="border-b bg-gray-50">
                    <th class="text-left p-2">No</th>
                    <th class="text-left p-2">Nama Unit</th>
                    <th class="text-left p-2">2021</th>
                    <th class="text-left p-2">2022</th>
                    <th class="text-left p-2">2023</th>
                    <th class="text-left p-2">2024</th>
                    <th class="text-left p-2">2025</th>
                    <th class="text-left p-2">Rata-rata (%)</th>
                    <th class="text-left p-2">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b">
                    <td class="p-2">1</td>
                    <td>Dinas Kesehatan</td>
                    <td>88</td><td>90</td><td>91</td><td>92</td><td>91</td>
                    <td>90.4%</td>
                    <td class="text-green-600">Lengkap</td>
                </tr>
                <tr class="border-b">
                    <td class="p-2">2</td>
                    <td>Dinas Pendidikan</td>
                    <td>85</td><td>86</td><td>88</td><td>89</td><td>89</td>
                    <td>87.4%</td>
                    <td class="text-green-600">Lengkap</td>
                </tr>
                <tr class="border-b">
                    <td class="p-2">3</td>
                    <td>Biro Administrasi</td>
                    <td>86</td><td>87</td><td>88</td><td>89</td><td>88</td>
                    <td>87.6%</td>
                    <td class="text-green-600">Lengkap</td>
                </tr>
                <tr class="border-b">
                    <td class="p-2">4</td>
                    <td>Dinas Sosial</td>
                    <td>80</td><td>82</td><td>84</td><td>85</td><td>86</td>
                    <td>83.4%</td>
                    <td class="text-orange-500">Perlu Perbaikan</td>
                </tr>
                <tr class="border-b">
                    <td class="p-2">5</td>
                    <td>Dinas Perhubungan</td>
                    <td>82</td><td>83</td><td>84</td><td>86</td><td>85</td>
                    <td>84.0%</td>
                    <td class="text-green-600">Lengkap</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
