@extends('layouts.app') 
{{-- layouts.app sudah berisi navbar yang terpisah --}}

@section('content')
<div class="bg-gray-50 min-h-screen px-8 py-6">

    <!-- Breadcrumb -->
    <div class="text-sm text-gray-600 mb-4">
        Home › Pengisian Dokumen LKE SIPENA
    </div>

    <!-- Title -->
    <h1 class="text-xl font-semibold text-gray-800 mb-6">
        Pengisian Dokumen LKE Utama SIPENA
    </h1>

    <!-- Tabs -->
    <div class="flex space-x-2 mb-6">
        <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg">Judul SIPENA — Pilih Salah Satu</button>
        <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg">Peserta SIPENA</button>
        <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg">Dinas Perpustakaan dan Kearsipan</button>
        <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg">
            Status Pengisian <span class="text-sm text-gray-500">(0 Sudah Terisi Dari 0 Komponen (0,00 %))</span>
        </button>
    </div>

    <!-- Title dinas -->
    <h2 class="text-gray-800 font-semibold mb-2">Dinas Perpustakaan dan Kearsipan</h2>

    <!-- Table -->
    <div class="bg-white rounded-lg shadow p-4 mb-6">
        <div class="flex justify-between items-center border-b pb-2 mb-3">
            <span class="text-gray-600 font-medium">Poin Penilaian Lembar Kerja Evaluasi</span>
            <span class="text-sm text-purple-500">Batas Waktu Pengisian Sudah Berakhir</span>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-gray-700">
                <thead>
                    <tr class="bg-gray-50 text-left text-gray-600">
                        <th class="px-4 py-2">Poin Penilaian Lembar Kerja Evaluasi</th>
                        <th class="px-4 py-2">Bukti Dukung</th>
                        <th class="px-4 py-2">Bobot</th>
                        <th class="px-4 py-2">Jawaban</th>
                        <th class="px-4 py-2">Nilai</th>
                        <th class="px-4 py-2">%</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="6" class="text-center text-gray-400 py-6">
                            Tidak ada data
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Info kosong -->
    <div class="text-center text-gray-500 mb-10">
        <p>Dokumen LKE Utama tidak bisa ditemukan</p>
        <p class="text-sm mt-1">
            Gunakan form pilihan di atas untuk memilih judul SIPENA yang ada.
        </p>
    </div>

    <!-- Hasil Evaluasi -->
    <div class="flex justify-between items-center text-gray-700 border-t pt-4">
        <span class="font-medium">HASIL EVALUASI AKUNTABILITAS KINERJA (10%)</span>
        <div class="flex space-x-8 text-right">
            <span>0.00</span>
            <span>0.00 %</span>
        </div>
    </div>

    <!-- Footer -->
    
</div>
@endsection
