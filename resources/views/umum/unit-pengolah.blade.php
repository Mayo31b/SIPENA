@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-2 gap-6">
        <div class="bg-white p-6 rounded shadow text-center">
            <p class="text-gray-600">JUMLAH DATA UMUM</p>
            <p class="text-3xl font-bold text-indigo-600 mt-2">10</p>
        </div>
        <div class="bg-white p-6 rounded shadow text-center">
            <p class="text-gray-600">TAMBAH DATA</p>
            <button class="mt-2 px-6 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded">TAMBAH</button>
        </div>
    </div>

    <!-- Table -->
     <br>
    <div class="overflow-x-auto rounded-lg shadow">
    <table class="w-full border-collapse text-sm">
        <thead>
            <tr class="bg-indigo-50 text-indigo-600">
                <th class="border px-3 py-2 text-left">NO</th>
                <th class="border px-3 py-2 text-left">NAMA UNIT</th>
                <th class="border px-3 py-2 text-left">ALAMAT</th>
                <th class="border px-3 py-2 text-left">JUMLAH ARSIPARIS</th>
                <th class="border px-3 py-2 text-left">JUMLAH PENGOLAH</th>
                <th class="border px-3 py-2 text-left">ARSIP VITAL</th>
                <th class="border px-3 py-2 text-center">AKSI</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border px-3 py-2">I.</td>
                <td class="border px-3 py-2"></td>
                <td class="border px-3 py-2">JL. MERDEKA NO 1</td>
                <td class="border px-3 py-2"></td>
                <td class="border px-3 py-2"></td>
                <td class="border px-3 py-2">ADA</td>
                <td class="border px-3 py-2 text-center space-x-2">
                    <button class="bg-indigo-500 hover:bg-indigo-600 text-white px-2 py-1 rounded">👁️</button>
                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-2 py-1 rounded">✏️</button>
                    <button class="bg-red-500 hover:bg-red-600 text-white px-2 py-1 rounded">🗑️</button>
                </td>
            </tr>
            <tr>
                <td class="border px-3 py-2">1</td>
                <td class="border px-3 py-2"></td>
                <td class="border px-3 py-2"></td>
                <td class="border px-3 py-2"></td>
                <td class="border px-3 py-2"></td>
                <td class="border px-3 py-2"></td>
                <td class="border px-3 py-2 text-center space-x-2">
                    <button class="bg-indigo-500 hover:bg-indigo-600 text-white px-2 py-1 rounded">👁️</button>
                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-2 py-1 rounded">✏️</button>
                    <button class="bg-red-500 hover:bg-red-600 text-white px-2 py-1 rounded">🗑️</button>
                </td>
            </tr>
            <tr>
                <td class="border px-3 py-2">2</td>
                <td class="border px-3 py-2"></td>
                <td class="border px-3 py-2"></td>
                <td class="border px-3 py-2"></td>
                <td class="border px-3 py-2"></td>
                <td class="border px-3 py-2"></td>
                <td class="border px-3 py-2 text-center space-x-2">
                    <button class="bg-indigo-500 hover:bg-indigo-600 text-white px-2 py-1 rounded">👁️</button>
                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-2 py-1 rounded">✏️</button>
                    <button class="bg-red-500 hover:bg-red-600 text-white px-2 py-1 rounded">🗑️</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
