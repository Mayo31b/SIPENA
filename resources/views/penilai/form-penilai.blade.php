@extends('layouts.app')

@section('content')
<div x-data="lkePage()" class="relative">
  <!-- Breadcrumb -->
  <div class="text-[12px] text-slate-500">
    Pengisian Dokumen LKE Utama SIPENA
    <span class="mx-2">•</span>
    Home / Pengisian Dokumen LKE SIPENA
  </div>

  <!-- Chips info -->
  <div class="mt-3 grid grid-cols-1 lg:grid-cols-5 gap-3">
    <div class="bg-white rounded-xl ring-1 ring-slate-200 px-4 py-2 text-[12px]">
      <div class="truncate"><span class="font-medium">Judul SIPENA</span> &nbsp; Evaluasi SIPENA 2026 -</div>
    </div>
    <div class="bg-white rounded-xl ring-1 ring-slate-200 px-4 py-2 text-[12px]">
      <div class="truncate"><span class="font-medium">Peserta SIPENA</span></div>
    </div>
    <div class="bg-white rounded-xl ring-1 ring-slate-200 px-4 py-2 text-[12px]">
      <div class="truncate">Dinas Perpustakaan dan Kearsipan</div>
    </div>
    <div class="bg-white rounded-xl ring-1 ring-slate-200 px-4 py-2 text-[12px]">
      <div class="truncate"><span class="font-medium">Status Pengisian</span></div>
    </div>
    <div class="bg-white rounded-xl ring-1 ring-slate-200 px-4 py-2 text-[12px]">
      <div class="truncate">77 Sudah Terisi Dari 77 Komponen (100.00 %)</div>
    </div>
  </div>

  <!-- BARIS FILTER -->
  <div class="mt-4 grid grid-cols-1 lg:grid-cols-2 gap-3">
    <!-- Jenis Unit -->
    <div class="bg-white rounded-xl ring-1 ring-slate-200 px-4 py-3 overflow-visible">
      <div class="text-[11px] text-slate-500 mb-1">Jenis Unit</div>
      <div class="relative z-20">
        <select x-model="jenisUnit" name="jenis_unit"
          class="w-full h-9 rounded-lg border border-slate-200 text-sm px-3 pr-8
                 focus:ring-2 focus:ring-sky-400 focus:border-sky-400 bg-white">
          <option>Unit Kearsipan</option>
          <option>Unit Pengolah</option>
        </select>
        <svg class="pointer-events-none absolute right-2 top-1/2 -translate-y-1/2 h-4 w-4 text-slate-500"
             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path d="M5.25 7.5L10 12.25 14.75 7.5" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>

    <!-- Pilih Form -->
    <div class="bg-white rounded-xl ring-1 ring-slate-200 px-4 py-3 overflow-visible">
      <div class="text-[11px] text-slate-500 mb-1">Pilih Form</div>
      <div class="relative z-20">
        <select x-model="pilihForm" name="pilih_form"
          class="w-full h-9 rounded-lg border border-slate-200 text-sm px-3 pr-8
                 focus:ring-2 focus:ring-sky-400 focus:border-sky-400 bg-white">
          <option>Penciptaan Arsip</option>
          <option>Pemeliharaan Arsip</option>
          <option>Penyusutan Arsip</option>
          <option>Penggunaan Arsip</option>
          <option>Sumber Daya Manusia</option>
          <option>Prasarana Arsip</option> <!-- DITAMBAHKAN -->
        </select>
        <svg class="pointer-events-none absolute right-2 top-1/2 -translate-y-1/2 h-4 w-4 text-slate-500"
             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path d="M5.25 7.5L10 12.25 14.75 7.5" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
  </div>

  <!-- BARIS METRIK -->
  <div class="mt-3 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
    <div class="bg-white rounded-xl ring-1 ring-slate-200 px-4 py-3">
      <div class="text-[11px] text-slate-500">Perencanaan Kinerja</div>
      <div class="mt-1 text-sm"><span class="font-semibold">24.01</span> / 30.00 • <span class="text-slate-600">80.0%</span></div>
    </div>
    <div class="bg-white rounded-xl ring-1 ring-slate-200 px-4 py-3">
      <div class="text-[11px] text-slate-500">Pengukuran Kinerja</div>
      <div class="mt-1 text-sm"><span class="font-semibold">27.58</span> / 30.00 • <span class="text-slate-600">91.93%</span></div>
    </div>
    <div class="bg-white rounded-xl ring-1 ring-slate-200 px-4 py-3">
      <div class="text-[11px] text-slate-500">Pelaporan Kinerja</div>
      <div class="mt-1 text-sm"><span class="font-semibold">12.54</span> / 15.00 • <span class="text-slate-600">83.60%</span></div>
    </div>
    <div class="bg-white rounded-xl ring-1 ring-slate-200 px-4 py-3">
      <div class="text-[11px] text-slate-500">Evaluasi Akuntabilitas</div>
      <div class="mt-1 text-sm"><span class="font-semibold">24.40</span> / 25.00 • <span class="text-slate-600">97.60%</span></div>
    </div>
  </div>

  <!-- === FORM PENCIPTAAN ARSIP (Unit Pengolah) === -->
  <section x-show="jenisUnit === 'Unit Pengolah' && pilihForm === 'Penciptaan Arsip'"
           x-transition
           class="mt-5 bg-white rounded-2xl ring-1 ring-slate-200 overflow-hidden">
    <div class="px-5 py-3 border-b border-slate-200">
      <div class="text-[13px] text-slate-600">
        <span class="font-medium">A. Penciptaan Arsip</span> — Aspek Pengelolaan Arsip Dinamis —
        <span class="font-medium">Sub Aspek: Penciptaan Arsip</span>
      </div>
    </div>

    <div class="overflow-x-auto">
      <table class="min-w-full text-sm">
        <thead class="bg-slate-50 text-slate-600">
          <tr class="border-b border-slate-200">
            <th class="text-left px-5 py-3 font-medium w-[44%]">Poin Penilaian Lembar Kerja Evaluasi</th>
            <th class="text-left px-5 py-3 font-medium w-[18%]">Bukti Dukung</th>
            <th class="text-left px-5 py-3 font-medium w-[8%]">Bobot</th>
            <th class="text-left px-5 py-3 font-medium w-[10%]">Jawaban</th>
            <th class="text-left px-5 py-3 font-medium w-[10%]">Nilai</th>
            <th class="text-left px-5 py-3 font-medium w-[10%]">%</th>
          </tr>
        </thead>

        <tbody class="divide-y divide-slate-200">
          <tr class="bg-slate-100/70">
            <td colspan="6" class="px-5 py-2 text-slate-700 font-medium">
              I. Kesesuaian terhadap Tata Naskah Dinas Pencipta Arsip •
            </td>
          </tr>

          <template x-for="row in rows.kesesuaian" :key="'k-'+row.id">
            <tr>
              <td class="px-5 py-3">
                <div class="flex items-center justify-between gap-2">
                  <span class="text-slate-700" x-text="row.pertanyaan"></span>
                  <button type="button" class="text-rose-600 text-xs hover:underline" @click="removeRow('kesesuaian', row.id)">Hapus</button>
                </div>
              </td>
              <td class="px-5 py-3 align-top">
                <div class="flex items-center gap-2">
                  <button type="button" class="rounded-lg bg-sky-600 text-white text-xs px-3 py-2 hover:bg-sky-700"
                          @click="row.openLink = true; row.linkDraft = row.link || ''">Isi Link</button>
                  <template x-if="row.link"><a :href="row.link" target="_blank" class="text-sky-600 hover:underline">1 Link</a></template>
                  <template x-if="!row.link"><span class="text-slate-400 text-xs">Belum ada</span></template>
                </div>
                <div x-show="row.openLink" x-transition class="mt-2 p-3 rounded-xl ring-1 ring-slate-200 bg-white w-[22rem] shadow">
                  <label class="block text-[11px] text-slate-500 mb-1">Tempel URL Bukti</label>
                  <input type="url" x-model="row.linkDraft" placeholder="https://contoh.com/file.pdf"
                         class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
                  <div class="mt-2 flex justify-end gap-2">
                    <button type="button" class="text-slate-600 text-xs px-3 py-1.5 rounded-lg hover:bg-slate-100" @click="row.openLink=false">Batal</button>
                    <button type="button" class="bg-sky-600 text-white text-xs px-3 py-1.5 rounded-lg hover:bg-sky-700" @click="row.link=row.linkDraft?.trim()||null; row.openLink=false">Simpan</button>
                  </div>
                </div>
              </td>
              <td class="px-5 py-3"><input type="number" step="0.01" min="0" max="100" x-model.number="row.bobot" @input="recalc(row)" class="w-24 rounded-lg border border-slate-200 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:border-sky-400"></td>
              <td class="px-5 py-3">
                <select x-model="row.jawaban" class="w-28 h-9 rounded-lg border border-slate-200 text-sm px-3 pr-8 focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
                  <template x-for="opt in options.jawaban" :key="opt"><option x-text="opt"></option></template>
                </select>
              </td>
              <td class="px-5 py-3"><input type="number" step="0.01" min="0" max="100" x-model.number="row.nilai" @input="recalc(row)" class="w-24 rounded-lg border border-slate-200 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:border-sky-400"></td>
              <td class="px-5 py-3"><input type="number" step="0.01" min="0" max="100" x-model.number="row.persen" class="w-24 rounded-lg border border-slate-200 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:border-sky-400"></td>
            </tr>
          </template>

          <tr class="bg-slate-100/70">
            <td colspan="6" class="px-5 py-2 text-slate-700 font-medium">B. Penerimaan Arsip •</td>
          </tr>

          <template x-for="row in rows.penerimaan" :key="'p-'+row.id">
            <tr>
              <td class="px-5 py-3">
                <div class="flex items-center justify-between gap-2">
                  <span class="text-slate-700" x-text="row.pertanyaan"></span>
                  <button type="button" class="text-rose-600 text-xs hover:underline" @click="removeRow('penerimaan', row.id)">Hapus</button>
                </div>
              </td>
              <td class="px-5 py-3">
                <div class="flex items-center gap-2">
                  <button type="button" class="rounded-lg bg-sky-600 text-white text-xs px-3 py-2 hover:bg-sky-700"
                          @click="row.openLink = true; row.linkDraft = row.link || ''">Isi Link</button>
                  <template x-if="row.link"><a :href="row.link" target="_blank" class="text-sky-600 hover:underline">1 Link</a></template>
                  <template x-if="!row.link"><span class="text-slate-400 text-xs">Belum ada</span></template>
                </div>
                <div x-show="row.openLink" x-transition class="mt-2 p-3 rounded-xl ring-1 ring-slate-200 bg-white w-[22rem] shadow">
                  <label class="block text-[11px] text-slate-500 mb-1">Tempel URL Bukti</label>
                  <input type="url" x-model="row.linkDraft" class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
                  <div class="mt-2 flex justify-end gap-2">
                    <button type="button" class="text-slate-600 text-xs px-3 py-1.5 rounded-lg hover:bg-slate-100" @click="row.openLink=false">Batal</button>
                    <button type="button" class="bg-sky-600 text-white text-xs px-3 py-1.5 rounded-lg hover:bg-sky-700" @click="row.link=row.linkDraft?.trim()||null; row.openLink=false">Simpan</button>
                  </div>
                </div>
              </td>
              <td class="px-5 py-3"><input type="number" step="0.01" min="0" max="100" x-model.number="row.bobot" @input="recalc(row)" class="w-24 rounded-lg border border-slate-200 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:border-sky-400"></td>
              <td class="px-5 py-3"><select x-model="row.jawaban" class="w-28 h-9 rounded-lg border border-slate-200 text-sm px-3 pr-8 focus:ring-2 focus:ring-sky-400 focus:border-sky-400"><template x-for="opt in options.jawaban" :key="'jaw-p-'+opt"><option x-text="opt"></option></template></select></td>
              <td class="px-5 py-3"><input type="number" step="0.01" min="0" max="100" x-model.number="row.nilai" @input="recalc(row)" class="w-24 rounded-lg border border-slate-200 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:border-sky-400"></td>
              <td class="px-5 py-3"><input type="number" step="0.01" min="0" max="100" x-model.number="row.persen" class="w-24 rounded-lg border border-slate-200 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:border-sky-400"></td>
            </tr>
          </template>

          <tr class="bg-slate-100/70">
            <td colspan="6" class="px-5 py-2 text-slate-700 font-medium">
              C. Ketentuan Tambahan Nilai (Pemenuhan Ketentuan Internal) •
            </td>
          </tr>

          <template x-for="row in rows.ketentuan" :key="'t-'+row.id">
            <tr>
              <td class="px-5 py-3">
                <div class="flex items-center justify-between gap-2">
                  <span class="text-slate-700" x-text="row.pertanyaan"></span>
                  <button type="button" class="text-rose-600 text-xs hover:underline" @click="removeRow('ketentuan', row.id)">Hapus</button>
                </div>
              </td>
              <td class="px-5 py-3">
                <div class="flex items-center gap-2">
                  <button type="button" class="rounded-lg bg-sky-600 text-white text-xs px-3 py-2 hover:bg-sky-700"
                          @click="row.openLink = true; row.linkDraft = row.link || ''">Isi Link</button>
                  <template x-if="row.link"><a :href="row.link" target="_blank" class="text-sky-600 hover:underline">1 Link</a></template>
                  <template x-if="!row.link"><span class="text-slate-400 text-xs">Belum ada</span></template>
                </div>
                <div x-show="row.openLink" x-transition class="mt-2 p-3 rounded-xl ring-1 ring-slate-200 bg-white w-[22rem] shadow">
                  <label class="block text-[11px] text-slate-500 mb-1">Tempel URL Bukti</label>
                  <input type="url" x-model="row.linkDraft" class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
                  <div class="mt-2 flex justify-end gap-2">
                    <button type="button" class="text-slate-600 text-xs px-3 py-1.5 rounded-lg hover:bg-slate-100" @click="row.openLink=false">Batal</button>
                    <button type="button" class="bg-sky-600 text-white text-xs px-3 py-1.5 rounded-lg hover:bg-sky-700"
                            @click="row.link=row.linkDraft?.trim()||null; row.openLink=false">Simpan</button>
                  </div>
                </div>
              </td>
              <td class="px-5 py-3"><input type="number" step="0.01" min="0" max="100" x-model.number="row.bobot" @input="recalc(row)" class="w-24 rounded-lg border border-slate-200 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:border-sky-400"></td>
              <td class="px-5 py-3"><select x-model="row.jawaban" class="w-28 h-9 rounded-lg border border-slate-200 text-sm px-3 pr-8 focus:ring-2 focus:ring-sky-400 focus:border-sky-400"><template x-for="opt in options.jawaban" :key="'jaw-t-'+opt"><option x-text="opt"></option></template></select></td>
              <td class="px-5 py-3"><input type="number" step="0.01" min="0" max="100" x-model.number="row.nilai" @input="recalc(row)" class="w-24 rounded-lg border border-slate-200 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:border-sky-400"></td>
              <td class="px-5 py-3"><input type="number" step="0.01" min="0" max="100" x-model.number="row.persen" class="w-24 rounded-lg border border-slate-200 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:border-sky-400"></td>
            </tr>
          </template>

          <tr class="bg-slate-50">
            <td colspan="6" class="px-5 py-3 text-[12px] text-slate-600">
              <div class="space-y-1">
                <div>• Penentuan nilai standar: 3200 (tanpa tambahan) / 3400 (dengan maks. tambahan 200)</div>
                <div>• Rumus: (Nilai Perolehan Utama / Nilai Standar) × 100 atau (Nilai Utama + Tambahan) / Nilai Standar × 100</div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
  <!-- === /FORM PENCIPTAAN ARSIP === -->

  <!-- === FORM PEMELIHARAAN ARSIP (Unit Pengolah) === -->
  <section x-show="jenisUnit === 'Unit Pengolah' && pilihForm === 'Pemeliharaan Arsip'"
           x-transition
           class="mt-5 bg-white rounded-2xl ring-1 ring-slate-200 overflow-hidden">
    <div class="px-5 py-3 border-b border-slate-200">
      <div class="text-[13px] text-slate-600">
        <span class="font-medium">A. Pemeliharaan Arsip</span> — Aspek Pengelolaan Arsip Dinamis —
        <span class="font-medium">Sub Aspek: Pemeliharaan Arsip</span>
      </div>
    </div>

    <div class="overflow-x-auto">
      <table class="min-w-full text-sm">
        <thead class="bg-slate-50 text-slate-600">
          <tr class="border-b border-slate-200">
            <th class="text-left px-5 py-3 font-medium w-[44%]">Poin Penilaian Lembar Kerja Evaluasi</th>
            <th class="text-left px-5 py-3 font-medium w-[18%]">Bukti Dukung</th>
            <th class="text-left px-5 py-3 font-medium w-[8%]">Bobot</th>
            <th class="text-left px-5 py-3 font-medium w-[10%]">Jawaban</th>
            <th class="text-left px-5 py-3 font-medium w-[10%]">Nilai</th>
            <th class="text-left px-5 py-3 font-medium w-[10%]">%</th>
          </tr>
        </thead>

        <tbody class="divide-y divide-slate-200">
          <template x-for="row in rows.pemeliharaanArsip" :key="'m-'+row.id">
            <tr>
              <td class="px-5 py-3">
                <div :class="{'pl-6': row.indent===1, 'pl-12': row.indent===2}">
                  <span class="text-slate-700" x-text="row.pertanyaan"></span>
                </div>
              </td>
              <td class="px-5 py-3 align-top">
                <template x-if="!row.note">
                  <div>
                    <div class="flex items-center gap-2">
                      <button type="button" class="rounded-lg bg-sky-600 text-white text-xs px-3 py-2 hover:bg-sky-700"
                              @click="row.openLink = true; row.linkDraft = row.link || ''">Isi Link</button>
                      <template x-if="row.link"><a :href="row.link" target="_blank" class="text-sky-600 hover:underline">1 Link</a></template>
                      <template x-if="!row.link"><span class="text-slate-400 text-xs">Belum ada</span></template>
                    </div>
                    <div x-show="row.openLink" x-transition
                         class="mt-2 p-3 rounded-xl ring-1 ring-slate-200 bg-white w-[22rem] shadow">
                      <label class="block text-[11px] text-slate-500 mb-1">Tempel URL Bukti</label>
                      <input type="url" x-model="row.linkDraft" placeholder="https://contoh.com/file.pdf"
                             class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
                      <div class="mt-2 flex justify-end gap-2">
                        <button type="button" class="text-slate-600 text-xs px-3 py-1.5 rounded-lg hover:bg-slate-100" @click="row.openLink=false">Batal</button>
                        <button type="button" class="bg-sky-600 text-white text-xs px-3 py-1.5 rounded-lg hover:bg-sky-700" @click="row.link=row.linkDraft?.trim()||null; row.openLink=false">Simpan</button>
                      </div>
                    </div>
                  </div>
                </template>
              </td>
              <td class="px-5 py-3">
                <template x-if="!row.note">
                  <input type="number" step="0.01" min="0" max="100" x-model.number="row.bobot" @input="recalc(row)"
                         class="w-24 rounded-lg border border-slate-200 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
                </template>
              </td>
              <td class="px-5 py-3">
                <template x-if="!row.note">
                  <select x-model="row.jawaban" class="w-28 h-9 rounded-lg border border-slate-200 text-sm px-3 pr-8 focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
                    <template x-for="opt in options.jawaban" :key="'jm-'+opt"><option x-text="opt"></option></template>
                  </select>
                </template>
              </td>
              <td class="px-5 py-3">
                <template x-if="!row.note">
                  <input type="number" step="0.01" min="0" max="100" x-model.number="row.nilai" @input="recalc(row)"
                         class="w-24 rounded-lg border border-slate-200 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
                </template>
              </td>
              <td class="px-5 py-3">
                <template x-if="!row.note">
                  <input type="number" step="0.01" min="0" max="100" x-model.number="row.persen"
                         class="w-24 rounded-lg border border-slate-200 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
                </template>
              </td>
            </tr>
          </template>

          <tr>
            <td colspan="6" class="px-5 py-3">
              <div class="grid sm:grid-cols-[180px_1fr] items-center gap-3">
                <div class="text-sm text-slate-600">Tanggal Audit</div>
                <input type="date" x-model="auditPemeliharaan.tanggal"
                       class="w-56 h-9 rounded-lg border border-slate-200 px-3 focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="6" class="px-5 pb-4">
              <div class="grid sm:grid-cols-[180px_1fr] gap-3">
                <div class="text-sm text-slate-600">Tim Pengawas / Sub Tim Pengawas / Penanggung Jawab Unit Pengolah</div>
                <textarea rows="2" x-model="auditPemeliharaan.tim" placeholder="Ketik nama/struktur tim…"
                          class="w-full rounded-lg border border-slate-200 px-3 py-2 focus:ring-2 focus:ring-sky-400 focus:border-sky-400"></textarea>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
  <!-- === /FORM PEMELIHARAAN ARSIP === -->

  <!-- === FORM PENYUSUTAN ARSIP (Unit Pengolah) === -->
  <section x-show="jenisUnit === 'Unit Pengolah' && pilihForm === 'Penyusutan Arsip'"
           x-transition
           class="mt-5 bg-white rounded-2xl ring-1 ring-slate-200 overflow-hidden">
    <div class="px-5 py-3 border-b border-slate-200">
      <div class="text-[13px] text-slate-600">
        <span class="font-medium">A. Penyusutan Arsip</span> — Aspek Pengelolaan Arsip Dinamis —
        <span class="font-medium">Sub Aspek: Penyusutan Arsip</span>
      </div>
    </div>

    <div class="overflow-x-auto">
      <table class="min-w-full text-sm">
        <thead class="bg-slate-50 text-slate-600">
          <tr class="border-b border-slate-200">
            <th class="text-left px-5 py-3 font-medium w-[44%]">Poin Penilaian Lembar Kerja Evaluasi</th>
            <th class="text-left px-5 py-3 font-medium w-[18%]">Bukti Dukung</th>
            <th class="text-left px-5 py-3 font-medium w-[8%]">Bobot</th>
            <th class="text-left px-5 py-3 font-medium w-[10%]">Jawaban</th>
            <th class="text-left px-5 py-3 font-medium w-[10%]">Nilai</th>
            <th class="text-left px-5 py-3 font-medium w-[10%]">%</th>
          </tr>
        </thead>

        <tbody class="divide-y divide-slate-200">
          <template x-for="row in rows.penyusutanArsip" :key="'s-'+row.id">
            <tr>
              <td class="px-5 py-3">
                <div :class="{'pl-6': row.indent===1, 'pl-12': row.indent===2}">
                  <span class="text-slate-700" x-text="row.pertanyaan"></span>
                </div>
              </td>
              <td class="px-5 py-3 align-top">
                <template x-if="!row.note">
                  <div>
                    <div class="flex items-center gap-2">
                      <button type="button" class="rounded-lg bg-sky-600 text-white text-xs px-3 py-2 hover:bg-sky-700"
                              @click="row.openLink = true; row.linkDraft = row.link || ''">Isi Link</button>
                      <template x-if="row.link"><a :href="row.link" target="_blank" class="text-sky-600 hover:underline">1 Link</a></template>
                      <template x-if="!row.link"><span class="text-slate-400 text-xs">Belum ada</span></template>
                    </div>
                    <div x-show="row.openLink" x-transition
                         class="mt-2 p-3 rounded-xl ring-1 ring-slate-200 bg-white w-[22rem] shadow">
                      <label class="block text-[11px] text-slate-500 mb-1">Tempel URL Bukti</label>
                      <input type="url" x-model="row.linkDraft" placeholder="https://contoh.com/file.pdf"
                             class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
                      <div class="mt-2 flex justify-end gap-2">
                        <button type="button" class="text-slate-600 text-xs px-3 py-1.5 rounded-lg hover:bg-slate-100" @click="row.openLink=false">Batal</button>
                        <button type="button" class="bg-sky-600 text-white text-xs px-3 py-1.5 rounded-lg hover:bg-sky-700" @click="row.link=row.linkDraft?.trim()||null; row.openLink=false">Simpan</button>
                      </div>
                    </div>
                  </div>
                </template>
              </td>
              <td class="px-5 py-3">
                <template x-if="!row.note">
                  <input type="number" step="0.01" min="0" max="100" x-model.number="row.bobot" @input="recalc(row)"
                         class="w-24 rounded-lg border border-slate-200 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
                </template>
              </td>
              <td class="px-5 py-3">
                <template x-if="!row.note">
                  <select x-model="row.jawaban" class="w-28 h-9 rounded-lg border border-slate-200 text-sm px-3 pr-8 focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
                    <template x-for="opt in options.jawaban" :key="'js-'+opt"><option x-text="opt"></option></template>
                  </select>
                </template>
              </td>
              <td class="px-5 py-3">
                <template x-if="!row.note">
                  <input type="number" step="0.01" min="0" max="100" x-model.number="row.nilai" @input="recalc(row)"
                         class="w-24 rounded-lg border border-slate-200 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
                </template>
              </td>
              <td class="px-5 py-3">
                <template x-if="!row.note">
                  <input type="number" step="0.01" min="0" max="100" x-model.number="row.persen"
                         class="w-24 rounded-lg border border-slate-200 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
                </template>
              </td>
            </tr>
          </template>

          <tr>
            <td colspan="6" class="px-5 py-3">
              <div class="grid sm:grid-cols-[180px_1fr] items-center gap-3">
                <div class="text-sm text-slate-600">Tanggal Audit</div>
                <input type="date" x-model="auditPenyusutan.tanggal"
                       class="w-56 h-9 rounded-lg border border-slate-200 px-3 focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="6" class="px-5 pb-4">
              <div class="grid sm:grid-cols-[180px_1fr] gap-3">
                <div class="text-sm text-slate-600">Tim Pengawas / Sub Tim Pengawas / Penanggung Jawab Unit Pengolah</div>
                <textarea rows="2" x-model="auditPenyusutan.tim" placeholder="Ketik nama/struktur tim…"
                          class="w-full rounded-lg border border-slate-200 px-3 py-2 focus:ring-2 focus:ring-sky-400 focus:border-sky-400"></textarea>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
  <!-- === /FORM PENYUSUTAN ARSIP === -->

  <!-- === FORM PENGGUNAAN ARSIP (Unit Pengolah) === -->
  <section x-show="jenisUnit === 'Unit Pengolah' && pilihForm === 'Penggunaan Arsip'"
           x-transition
           class="mt-5 bg-white rounded-2xl ring-1 ring-slate-200 overflow-hidden">
    <div class="px-5 py-3 border-b border-slate-200">
      <div class="text-[13px] text-slate-600">
        <span class="font-medium">A. Penggunaan Arsip</span> — Aspek Pengelolaan Arsip Dinamis —
        <span class="font-medium">Sub Aspek: Penggunaan Arsip</span>
      </div>
    </div>

    <div class="overflow-x-auto">
      <table class="min-w-full text-sm">
        <thead class="bg-slate-50 text-slate-600">
          <tr class="border-b border-slate-200">
            <th class="text-left px-5 py-3 font-medium w-[44%]">Poin Penilaian Lembar Kerja Evaluasi</th>
            <th class="text-left px-5 py-3 font-medium w-[18%]">Bukti Dukung</th>
            <th class="text-left px-5 py-3 font-medium w-[8%]">Bobot</th>
            <th class="text-left px-5 py-3 font-medium w-[10%]">Jawaban</th>
            <th class="text-left px-5 py-3 font-medium w-[10%]">Nilai</th>
            <th class="text-left px-5 py-3 font-medium w-[10%]">%</th>
          </tr>
        </thead>

        <tbody class="divide-y divide-slate-200">
          <template x-for="row in rows.penggunaanArsip" :key="'u-'+row.id">
            <tr>
              <td class="px-5 py-3">
                <div :class="{'pl-6': row.indent===1, 'pl-12': row.indent===2}">
                  <span class="text-slate-700" x-text="row.pertanyaan"></span>
                </div>
              </td>
              <td class="px-5 py-3 align-top">
                <template x-if="!row.note">
                  <div>
                    <div class="flex items-center gap-2">
                      <button type="button" class="rounded-lg bg-sky-600 text-white text-xs px-3 py-2 hover:bg-sky-700"
                              @click="row.openLink = true; row.linkDraft = row.link || ''">Isi Link</button>
                      <template x-if="row.link"><a :href="row.link" target="_blank" class="text-sky-600 hover:underline">1 Link</a></template>
                      <template x-if="!row.link"><span class="text-slate-400 text-xs">Belum ada</span></template>
                    </div>
                    <div x-show="row.openLink" x-transition
                         class="mt-2 p-3 rounded-xl ring-1 ring-slate-200 bg-white w-[22rem] shadow">
                      <label class="block text-[11px] text-slate-500 mb-1">Tempel URL Bukti</label>
                      <input type="url" x-model="row.linkDraft" placeholder="https://contoh.com/file.pdf"
                             class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
                      <div class="mt-2 flex justify-end gap-2">
                        <button type="button" class="text-slate-600 text-xs px-3 py-1.5 rounded-lg hover:bg-slate-100" @click="row.openLink=false">Batal</button>
                        <button type="button" class="bg-sky-600 text-white text-xs px-3 py-1.5 rounded-lg hover:bg-sky-700" @click="row.link=row.linkDraft?.trim()||null; row.openLink=false">Simpan</button>
                      </div>
                    </div>
                  </div>
                </template>
              </td>
              <td class="px-5 py-3">
                <template x-if="!row.note">
                  <input type="number" step="0.01" min="0" max="100" x-model.number="row.bobot" @input="recalc(row)"
                         class="w-24 rounded-lg border border-slate-200 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
                </template>
              </td>
              <td class="px-5 py-3">
                <template x-if="!row.note">
                  <select x-model="row.jawaban" class="w-28 h-9 rounded-lg border border-slate-200 text-sm px-3 pr-8 focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
                    <template x-for="opt in options.jawaban" :key="'j-'+opt"><option x-text="opt"></option></template>
                  </select>
                </template>
              </td>
              <td class="px-5 py-3">
                <template x-if="!row.note">
                  <input type="number" step="0.01" min="0" max="100" x-model.number="row.nilai" @input="recalc(row)"
                         class="w-24 rounded-lg border border-slate-200 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
                </template>
              </td>
              <td class="px-5 py-3">
                <template x-if="!row.note">
                  <input type="number" step="0.01" min="0" max="100" x-model.number="row.persen"
                         class="w-24 rounded-lg border border-slate-200 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
                </template>
              </td>
            </tr>
          </template>

          <tr>
            <td colspan="6" class="px-5 py-3">
              <div class="grid sm:grid-cols-[180px_1fr] items-center gap-3">
                <div class="text-sm text-slate-600">Tanggal Audit</div>
                <input type="date" x-model="auditPenggunaan.tanggal"
                       class="w-56 h-9 rounded-lg border border-slate-200 px-3 focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="6" class="px-5 pb-4">
              <div class="grid sm:grid-cols-[180px_1fr] gap-3">
                <div class="text-sm text-slate-600">Tim Pengawas / Sub Tim Pengawas / Penanggung Jawab Unit Pengolah</div>
                <textarea rows="2" x-model="auditPenggunaan.tim" placeholder="Ketik nama/struktur tim…"
                          class="w-full rounded-lg border border-slate-200 px-3 py-2 focus:ring-2 focus:ring-sky-400 focus:border-sky-400"></textarea>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
  <!-- === /FORM PENGGUNAAN ARSIP === -->

  <!-- === FORM SUMBER DAYA MANUSIA (Unit Pengolah) === -->
  <section x-show="jenisUnit === 'Unit Pengolah' && pilihForm === 'Sumber Daya Manusia'"
           x-transition
           class="mt-5 bg-white rounded-2xl ring-1 ring-slate-200 overflow-hidden">
    <div class="px-5 py-3 border-b border-slate-200">
      <div class="text-[13px] text-slate-600">
        <span class="font-medium">A. Sumber Daya Manusia</span> — Aspek Pengelolaan Arsip Dinamis —
        <span class="font-medium">Sub Aspek: SDM Kearsipan Unit Pengolah</span>
      </div>
    </div>

    <div class="overflow-x-auto">
      <table class="min-w-full text-sm">
        <thead class="bg-slate-50 text-slate-600">
          <tr class="border-b border-slate-200">
            <th class="text-left px-5 py-3 font-medium w-[44%]">Poin Penilaian Lembar Kerja Evaluasi</th>
            <th class="text-left px-5 py-3 font-medium w-[18%]">Bukti Dukung</th>
            <th class="text-left px-5 py-3 font-medium w-[8%]">Bobot</th>
            <th class="text-left px-5 py-3 font-medium w-[10%]">Jawaban</th>
            <th class="text-left px-5 py-3 font-medium w-[10%]">Nilai</th>
            <th class="text-left px-5 py-3 font-medium w-[10%]">%</th>
          </tr>
        </thead>

        <tbody class="divide-y divide-slate-200">
          <template x-for="row in rows.sdmPengolah" :key="'sdm-'+row.id">
            <tr>
              <td class="px-5 py-3">
                <div :class="{'pl-6': row.indent===1, 'pl-12': row.indent===2}">
                  <span class="text-slate-700" x-text="row.pertanyaan"></span>
                </div>
              </td>
              <td class="px-5 py-3 align-top">
                <template x-if="!row.note">
                  <div>
                    <div class="flex items-center gap-2">
                      <button type="button" class="rounded-lg bg-sky-600 text-white text-xs px-3 py-2 hover:bg-sky-700"
                              @click="row.openLink = true; row.linkDraft = row.link || ''">Isi Link</button>
                      <template x-if="row.link"><a :href="row.link" target="_blank" class="text-sky-600 hover:underline">1 Link</a></template>
                      <template x-if="!row.link"><span class="text-slate-400 text-xs">Belum ada</span></template>
                    </div>
                    <div x-show="row.openLink" x-transition
                         class="mt-2 p-3 rounded-xl ring-1 ring-slate-200 bg-white w-[22rem] shadow">
                      <label class="block text-[11px] text-slate-500 mb-1">Tempel URL Bukti</label>
                      <input type="url" x-model="row.linkDraft" placeholder="https://contoh.com/file.pdf"
                             class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
                      <div class="mt-2 flex justify-end gap-2">
                        <button type="button" class="text-slate-600 text-xs px-3 py-1.5 rounded-lg hover:bg-slate-100" @click="row.openLink=false">Batal</button>
                        <button type="button" class="bg-sky-600 text-white text-xs px-3 py-1.5 rounded-lg hover:bg-sky-700" @click="row.link=row.linkDraft?.trim()||null; row.openLink=false">Simpan</button>
                      </div>
                    </div>
                  </div>
                </template>
              </td>
              <td class="px-5 py-3">
                <template x-if="!row.note">
                  <input type="number" step="0.01" min="0" max="100" x-model.number="row.bobot" @input="recalc(row)"
                         class="w-24 rounded-lg border border-slate-200 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
                </template>
              </td>
              <td class="px-5 py-3">
                <template x-if="!row.note">
                  <select x-model="row.jawaban" class="w-28 h-9 rounded-lg border border-slate-200 text-sm px-3 pr-8 focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
                    <template x-for="opt in options.jawaban" :key="'jsdm-'+opt"><option x-text="opt"></option></template>
                  </select>
                </template>
              </td>
              <td class="px-5 py-3">
                <template x-if="!row.note">
                  <input type="number" step="0.01" min="0" max="100" x-model.number="row.nilai" @input="recalc(row)"
                         class="w-24 rounded-lg border border-slate-200 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
                </template>
              </td>
              <td class="px-5 py-3">
                <template x-if="!row.note">
                  <input type="number" step="0.01" min="0" max="100" x-model.number="row.persen"
                         class="w-24 rounded-lg border border-slate-200 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
                </template>
              </td>
            </tr>
          </template>

          <tr>
            <td colspan="6" class="px-5 py-3">
              <div class="grid sm:grid-cols-[180px_1fr] items-center gap-3">
                <div class="text-sm text-slate-600">Tanggal Audit</div>
                <input type="date" x-model="auditSDM.tanggal"
                       class="w-56 h-9 rounded-lg border border-slate-200 px-3 focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="6" class="px-5 pb-4">
              <div class="grid sm:grid-cols-[180px_1fr] gap-3">
                <div class="text-sm text-slate-600">Tim Pengawas / Sub Tim Pengawas / Penanggung Jawab Unit Pengolah</div>
                <textarea rows="2" x-model="auditSDM.tim" placeholder="Ketik nama/struktur tim…"
                          class="w-full rounded-lg border border-slate-200 px-3 py-2 focus:ring-2 focus:ring-sky-400 focus:border-sky-400"></textarea>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
  <!-- === /FORM SUMBER DAYA MANUSIA === -->

  <!-- === FORM PRASARANA ARSIP (Unit Pengolah) — DITAMBAHKAN === -->
  <section x-show="jenisUnit === 'Unit Pengolah' && pilihForm === 'Prasarana Arsip'"
           x-transition
           class="mt-5 bg-white rounded-2xl ring-1 ring-slate-200 overflow-hidden">
    <div class="px-5 py-3 border-b border-slate-200">
      <div class="text-[13px] text-slate-600">
        <span class="font-medium">A. Prasarana Arsip</span> — Aspek Pengelolaan Arsip Dinamis —
        <span class="font-medium">Sub Aspek: Sarana/Prasarana Penyimpanan</span>
      </div>
    </div>

    <div class="overflow-x-auto">
      <table class="min-w-full text-sm">
        <thead class="bg-slate-50 text-slate-600">
          <tr class="border-b border-slate-200">
            <th class="text-left px-5 py-3 font-medium w-[44%]">Poin Penilaian Lembar Kerja Evaluasi</th>
            <th class="text-left px-5 py-3 font-medium w-[18%]">Bukti Dukung</th>
            <th class="text-left px-5 py-3 font-medium w-[8%]">Bobot</th>
            <th class="text-left px-5 py-3 font-medium w-[10%]">Jawaban</th>
            <th class="text-left px-5 py-3 font-medium w-[10%]">Nilai</th>
            <th class="text-left px-5 py-3 font-medium w-[10%]">%</th>
          </tr>
        </thead>

        <tbody class="divide-y divide-slate-200">
          <template x-for="row in rows.prasaranaArsip" :key="'pr-'+row.id">
            <tr>
              <td class="px-5 py-3">
                <div :class="{'pl-6': row.indent===1, 'pl-12': row.indent===2}">
                  <span class="text-slate-700" x-text="row.pertanyaan"></span>
                </div>
              </td>
              <td class="px-5 py-3 align-top">
                <template x-if="!row.note">
                  <div>
                    <div class="flex items-center gap-2">
                      <button type="button" class="rounded-lg bg-sky-600 text-white text-xs px-3 py-2 hover:bg-sky-700"
                              @click="row.openLink = true; row.linkDraft = row.link || ''">Isi Link</button>
                      <template x-if="row.link"><a :href="row.link" target="_blank" class="text-sky-600 hover:underline">1 Link</a></template>
                      <template x-if="!row.link"><span class="text-slate-400 text-xs">Belum ada</span></template>
                    </div>
                    <div x-show="row.openLink" x-transition class="mt-2 p-3 rounded-xl ring-1 ring-slate-200 bg-white w-[22rem] shadow">
                      <label class="block text-[11px] text-slate-500 mb-1">Tempel URL Bukti</label>
                      <input type="url" x-model="row.linkDraft" placeholder="https://contoh.com/file.pdf"
                             class="w-full rounded-lg border border-slate-200 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
                      <div class="mt-2 flex justify-end gap-2">
                        <button type="button" class="text-slate-600 text-xs px-3 py-1.5 rounded-lg hover:bg-slate-100" @click="row.openLink=false">Batal</button>
                        <button type="button" class="bg-sky-600 text-white text-xs px-3 py-1.5 rounded-lg hover:bg-sky-700" @click="row.link=row.linkDraft?.trim()||null; row.openLink=false">Simpan</button>
                      </div>
                    </div>
                  </div>
                </template>
              </td>
              <td class="px-5 py-3">
                <template x-if="!row.note">
                  <input type="number" step="0.01" min="0" max="100" x-model.number="row.bobot" @input="recalc(row)"
                         class="w-24 rounded-lg border border-slate-200 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
                </template>
              </td>
              <td class="px-5 py-3">
                <template x-if="!row.note">
                  <select x-model="row.jawaban" class="w-28 h-9 rounded-lg border border-slate-200 text-sm px-3 pr-8 focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
                    <template x-for="opt in options.jawaban" :key="'jpr-'+opt"><option x-text="opt"></option></template>
                  </select>
                </template>
              </td>
              <td class="px-5 py-3">
                <template x-if="!row.note">
                  <input type="number" step="0.01" min="0" max="100" x-model.number="row.nilai" @input="recalc(row)"
                         class="w-24 rounded-lg border border-slate-200 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
                </template>
              </td>
              <td class="px-5 py-3">
                <template x-if="!row.note">
                  <input type="number" step="0.01" min="0" max="100" x-model.number="row.persen"
                         class="w-24 rounded-lg border border-slate-200 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
                </template>
              </td>
            </tr>
          </template>

          <tr>
            <td colspan="6" class="px-5 py-3">
              <div class="grid sm:grid-cols-[180px_1fr] items-center gap-3">
                <div class="text-sm text-slate-600">Tanggal Audit</div>
                <input type="date" x-model="auditPrasarana.tanggal"
                       class="w-56 h-9 rounded-lg border border-slate-200 px-3 focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="6" class="px-5 pb-4">
              <div class="grid sm:grid-cols-[180px_1fr] gap-3">
                <div class="text-sm text-slate-600">Tim Pengawas / Sub Tim Pengawas / Penanggung Jawab Unit Pengolah</div>
                <textarea rows="2" x-model="auditPrasarana.tim" placeholder="Ketik nama/struktur tim…"
                          class="w-full rounded-lg border border-slate-200 px-3 py-2 focus:ring-2 focus:ring-sky-400 focus:border-sky-400"></textarea>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
  <!-- === /FORM PRASARANA ARSIP === -->

  <!-- Panel tabel (dummy, tetap) -->
  <section class="mt-5 bg-white rounded-2xl ring-1 ring-slate-200 overflow-hidden">
    <div class="flex items-center justify-between px-5 py-3 text-sm">
      <div class="font-medium">Dinas Perpustakaan dan Kearsipan</div>
      <div class="text-slate-500">Batas Waktu Pengisian Sudah Berakhir</div>
    </div>
    <div class="border-t border-slate-200"></div>
    <div class="overflow-x-auto">
      <table class="min-w-full text-sm">
        <thead class="bg-slate-50 text-slate-600">
          <tr class="border-b border-slate-200">
            <th class="text-left px-5 py-3 font-medium w-[42%]">Poin Penilaian Lembar Kerja Evaluasi</th>
            <th class="text-left px-5 py-3 font-medium w-[18%]">Bukti/Dukung</th>
            <th class="text-left px-5 py-3 font-medium w-[8%]">Bobot</th>
            <th class="text-left px-5 py-3 font-medium w-[10%]">Jawaban</th>
            <th class="text-left px-5 py-3 font-medium w-[10%]">Nilai</th>
            <th class="text-left px-5 py-3 font-medium w-[12%]">%</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-slate-200">
          <tr class="bg-blue-50/50"><td colspan="6" class="px-5 py-2 text-slate-600">—</td></tr>
          <tr>
            <td class="px-5 py-3">—</td>
            <td class="px-5 py-3"><a href="#" class="text-sky-600 hover:underline">1 Link</a></td>
            <td class="px-5 py-3">6.00</td>
            <td class="px-5 py-3">B</td>
            <td class="px-5 py-3">0.50</td>
            <td class="px-5 py-3">87.50%</td>
          </tr>
          @for ($i=0; $i<7; $i++)
            <tr><td class="px-5 py-3 text-slate-400">-</td><td class="px-5 py-3 text-slate-400">-</td><td class="px-5 py-3 text-slate-400">-</td><td class="px-5 py-3 text-slate-400">-</td><td class="px-5 py-3 text-slate-400">-</td><td class="px-5 py-3 text-slate-400">-</td></tr>
          @endfor
          <tr class="bg-blue-50/50"><td colspan="6" class="px-5 py-2 text-slate-600">—</td></tr>
          @for ($i=0; $i<6; $i++)
            <tr><td class="px-5 py-3 text-slate-400">-</td><td class="px-5 py-3 text-slate-400">-</td><td class="px-5 py-3 text-slate-400">-</td><td class="px-5 py-3 text-slate-400">-</td><td class="px-5 py-3 text-slate-400">-</td><td class="px-5 py-3 text-slate-400">-</td></tr>
          @endfor
          <tr class="bg-blue-50/50"><td colspan="6" class="px-5 py-2 text-slate-600">—</td></tr>
          @for ($i=0; $i<6; $i++)
            <tr><td class="px-5 py-3 text-slate-400">-</td><td class="px-5 py-3 text-slate-400">-</td><td class="px-5 py-3 text-slate-400">-</td><td class="px-5 py-3 text-slate-400">-</td><td class="px-5 py-3 text-slate-400">-</td><td class="px-5 py-3 text-slate-400">-</td></tr>
          @endfor
          <tr class="bg-slate-50 font-medium">
            <td class="px-5 py-3">Total</td><td class="px-5 py-3"></td><td class="px-5 py-3"></td><td class="px-5 py-3"></td>
            <td class="px-5 py-3">13.50</td><td class="px-5 py-3">87.50 %</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- ==== MODAL BULK (tetap) ==== -->
  <div x-show="bulk.open" x-transition.opacity class="fixed inset-0 z-50">
    <div class="absolute inset-0 bg-black/30"></div>
    <div class="absolute inset-0 flex items-center justify-center p-4">
      <div class="w-full max-w-2xl bg-white rounded-2xl ring-1 ring-slate-200 shadow-lg">
        <div class="px-5 py-3 border-b border-slate-200 flex items-center justify-between">
          <div class="text-sm font-medium text-slate-700">
            Pilih Pertanyaan (Multi) — <span x-text="labelSection(bulk.section)"></span>
          </div>
          <button class="text-slate-500 hover:text-slate-700" @click="bulk.open=false">✕</button>
        </div>

        <div class="p-4">
          <div class="flex items-center gap-2 mb-3">
            <input type="text" x-model="bulk.search" placeholder="Cari pertanyaan..."
                   class="flex-1 rounded-lg border border-slate-200 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
            <button class="text-xs rounded-lg bg-slate-100 px-3 py-2 hover:bg-slate-200" @click="bulkSelectAll()">Pilih Semua</button>
            <button class="text-xs rounded-lg bg-slate-100 px-3 py-2 hover:bg-slate-200" @click="bulkClear()">Bersihkan</button>
          </div>

          <div class="max-h-72 overflow-auto border border-slate-200 rounded-xl p-3">
            <template x-for="opt in filteredBulkOptions()" :key="opt">
              <label class="flex items-start gap-2 text-sm py-1">
                <input type="checkbox" class="mt-1" :checked="!!bulk.selected[opt]" @change="toggleBulk(opt, $event.target.checked)">
                <span x-text="(opt.t||opt)"></span>
              </label>
            </template>
            <template x-if="filteredBulkOptions().length === 0">
              <div class="text-sm text-slate-400">Tidak ada hasil.</div>
            </template>
          </div>
        </div>

        <div class="px-5 py-3 border-t border-slate-200 flex items-center justify-end gap-2">
          <button class="text-slate-600 text-sm px-4 py-2 rounded-lg hover:bg-slate-100" @click="bulk.open=false">Batal</button>
          <button class="bg-sky-600 text-white text-sm px-4 py-2 rounded-lg hover:bg-sky-700" @click="confirmBulk()">Simpan</button>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

{{-- DATA & LOGIKA ALPINE --}}
<script>
  function lkePage(){
    const makeRow = (pertanyaan = '', indent = 0, note = false) => ({
      id: crypto.randomUUID ? crypto.randomUUID() : Math.random().toString(36).slice(2),
      pertanyaan, indent, note,
      link: null, linkDraft: '', openLink: false,
      bobot: 0, jawaban: 'A', nilai: 0, persen: 0,
    });

    return {
      jenisUnit: 'Unit Kearsipan',
      pilihForm: 'Penciptaan Arsip',

      options: {
        kesesuaian: [
          'Penomoran Naskah Dinas',
          'Pencantuman Kode Klasifikasi Arsip pada Naskah Dinas',
          'Penulisan Nomor Naskah sesuai susunan Penomoran',
          'Penggunaan Kertas Naskah Dinas — Ukuran',
          'Penggunaan Kertas Naskah Dinas — Gramatur',
          'Struktur Naskah Dinas — Kepala',
          'Struktur Naskah Dinas — Batang Tubuh',
          'Struktur Naskah Dinas — Kaki Naskah',
          'Format — Jenis Huruf',
          'Format — Ukuran Huruf',
          'Format — Penjilidan Halaman',
          'Format — Batas/Ruang Tepi',
          'Format — Nomor Halaman',
          'Lampiran', 'Tembusan',
          'Penggunaan Logo/Lambang',
          'Pembubuhan Paraf — Konsep oleh pejabat',
          'Pembubuhan Paraf — Log history',
          'Penggunaan Cap Dinas — Bentuk',
          'Penggunaan Cap Dinas — Warna',
          'Pendelegasian — Kewenangan TTD',
          'Pendelegasian — Pelimpahan (an., u.b., ptt., plh.)',
          'Pengamanan — Kode SR/R/TB',
          'Pengamanan — Nomor Seri/Security Printing',
          'Pengendalian Naskah Keluar — Pencatatan',
          'Pengendalian Naskah Keluar — Penggandaan',
          'Pengendalian Naskah Keluar — Pengiriman',
          'Pengendalian Naskah Keluar — Penyimpanan',
        ],
        penerimaan: [
          'Pengendalian Naskah Masuk — Penerimaan',
          'Pengendalian Naskah Masuk — Pencatatan',
          'Pengendalian Naskah Masuk — Pengolahan',
          'Pengendalian Naskah Masuk — Penyimpanan',
        ],
        ketentuan: [
          'Pemenuhan Ketentuan Internal — Bukti SOP/Keputusan',
          'Pemenuhan Ketentuan Internal — Bukti Implementasi',
        ],

        penggunaanArsip: [
          { t:'1. Ketersediaan Arsip Aktif', i:0, note:true },
          { t:'2. Sarana Peminjaman Arsip', i:0, note:true },
          { t:'2.1. Unit pengolah menggunakan Out Indicator untuk mengganti arsip yang sedang dipinjam (Out Indicator dapat berupa Out Sheet, Out Guide, atau sarana sejenis)', i:1 },
          { t:'2.2. Buku Peminjaman / Formulir Peminjaman tersedia', i:1 },
          { t:'3. Penyajian Arsip Aktif', i:0, note:true },
          { t:'3.1. Unit Pengolah menyajikan arsip aktif bagi kepentingan pengguna internal', i:1, note:true },
          { t:'3.1.1. Untuk Penentu Kebijakan', i:2 },
          { t:'3.1.2. Untuk Pelaksana Kebijakan', i:2 },
          { t:'3.1.3. Untuk Pengawas Internal', i:2 },
          { t:'3.2. Unit Pengolah menyajikan arsip aktif bagi kepentingan pengguna internal berdasarkan sistem klasifikasi keamanan & akses arsip dinamis', i:1 },
          { t:'3.3. Unit Pengolah menyajikan arsip aktif bagi kepentingan pengguna eksternal', i:1, note:true },
          { t:'3.3.1. Untuk Publik / Masyarakat', i:2 },
          { t:'3.3.2. Untuk Pengawas Eksternal', i:2 },
          { t:'3.3.3. Untuk Penegak Hukum', i:2 },
          { t:'3.4. Unit Pengolah menyajikan arsip aktif bagi kepentingan pengguna eksternal berdasarkan sistem klasifikasi keamanan & akses arsip dinamis', i:1 },
        ],

        pemeliharaanArsip: [
          { t:'1. Penataan & Penyimpanan Arsip Aktif', i:0, note:true },
          { t:'1.1. Tersedia daftar klasifikasi/kode arsip (file plan) yang digunakan', i:1 },
          { t:'1.2. Pemberkasan mengikuti JRA & pola klasifikasi', i:1 },
          { t:'1.3. Penataan berkas sesuai unit pengolah/subjek kegiatan', i:1 },
          { t:'1.4. Labeling map/boks sesuai standar (kode, uraian, tahun, retensi)', i:1 },
          { t:'2. Sarana & Prasarana Penyimpanan', i:0, note:true },
          { t:'2.1. Ketersediaan rak/lemari, boks arsip, map (sesuai kebutuhan)', i:1 },
          { t:'2.2. Penandaan lokasi/nomor lokasi simpan (shelf/location index)', i:1 },
          { t:'3. Pemeliharaan Fisik Arsip', i:0, note:true },
          { t:'3.1. Kebersihan ruang/lemari & berkas dilakukan berkala', i:1 },
          { t:'3.2. Pengendalian hama/jamur (inspeksi, pembersihan, anoxic, dll.)', i:1 },
          { t:'3.3. Pengaturan lingkungan (suhu, kelembaban, sirkulasi udara)', i:1 },
          { t:'4. Keamanan & Akses Arsip', i:0, note:true },
          { t:'4.1. Penerapan klasifikasi keamanan & hak akses', i:1 },
          { t:'4.2. Pencatatan penggunaan/log akses arsip', i:1 },
          { t:'4.3. Backup/duplikasi arsip digital (jika ada)', i:1 },
          { t:'5. Layanan Peminjaman & Pengembalian', i:0, note:true },
          { t:'5.1. Prosedur/rekam jejak peminjaman (check-out) tersedia', i:1 },
          { t:'5.2. Penggunaan out indicator pada berkas yang dipinjam', i:1 },
          { t:'5.3. Refiling (pengembalian ke lokasi semula) sesuai ketentuan', i:1 },
          { t:'6. Pemindahan (Inaktivasi) ke Unit Kearsipan', i:0, note:true },
          { t:'6.1. Penetapan daftar arsip inaktif berdasarkan JRA', i:1 },
          { t:'6.2. Daftar pemindahan & berita acara serah terima', i:1 },
          { t:'6.3. Penataan fisik sebelum dipindahkan (cek, ikat, label, daftar)', i:1 },
          { t:'7. Ketentuan & Pembinaan Internal', i:0, note:true },
          { t:'7.1. Tersedia SOP pemeliharaan/penyimpanan/pemberkasan', i:1 },
          { t:'7.2. Bukti sosialisasi/pelatihan internal terkait pemeliharaan arsip', i:1 },
        ],

        penyusutanArsip: [
          { t:'1. Kebijakan & Dasar Hukum Penyusutan', i:0, note:true },
          { t:'1.1. JRA (Jadwal Retensi Arsip) yang berlaku/ditetapkan tersedia', i:1 },
          { t:'1.2. SOP penyusutan (pemindahan, pemusnahan, penyerahan) tersedia', i:1 },
          { t:'2. Penilaian & Identifikasi Arsip', i:0, note:true },
          { t:'2.1. Daftar penilaian arsip aktif/inaktif mengacu JRA', i:1 },
          { t:'2.2. Berita acara pemeriksaan/penilaian kelayakan arsip', i:1 },
          { t:'3. Pemusnahan Arsip', i:0, note:true },
          { t:'3.1. Daftar usul pemusnahan (DUPA) sesuai JRA', i:1 },
          { t:'3.2. Persetujuan pejabat berwenang/ANRI/lembaga kearsipan', i:1 },
          { t:'3.3. Pelaksanaan pemusnahan terdokumentasi (metode/foto/video)', i:1 },
          { t:'3.4. Berita Acara Pemusnahan', i:1 },
          { t:'4. Penyerahan Arsip Statis', i:0, note:true },
          { t:'4.1. Daftar usul serah arsip statis (DUSA)', i:1 },
          { t:'4.2. BAST/berita acara serah terima ke Lembaga Kearsipan', i:1 },
          { t:'4.3. Daftar nominatif/finding aids (riwayat pencipta)', i:1 },
          { t:'5. Pemindahan Arsip Inaktif ke Unit Kearsipan', i:0, note:true },
          { t:'5.1. Daftar pemindahan inaktif & kode lokasi', i:1 },
          { t:'5.2. BAST pemindahan ke Unit Kearsipan', i:1 },
          { t:'6. Arsip Digital saat Penyusutan', i:0, note:true },
          { t:'6.1. Daftar arsip digital dengan metadata minimal', i:1 },
          { t:'6.2. BA migrasi format/media (jika ada)', i:1 },
          { t:'7. Pelaporan & Monitoring', i:0, note:true },
          { t:'7.1. Rekap tahunan kegiatan penyusutan', i:1 },
          { t:'7.2. Laporan disampaikan ke pimpinan/UPK/Arsiparis pembina', i:1 },
        ],

        // SDM (baru)
        sdmPengolah: [
          { t:'1. Penetapan Personel Pengelola Arsip', i:0, note:true },
          { t:'1.1. Ada SK/Surat Tugas penunjukan petugas kearsipan di unit pengolah', i:1 },
          { t:'1.2. Uraian tugas/fungsi (job description) petugas kearsipan tersedia', i:1 },
          { t:'1.3. Kualifikasi/kompetensi petugas sesuai kebutuhan tugas kearsipan', i:1 },

          { t:'2. Kecukupan & Komposisi SDM', i:0, note:true },
          { t:'2.1. Kecukupan jumlah petugas terhadap volume arsip/kegiatan', i:1 },
          { t:'2.2. Penempatan petugas sesuai struktur/unit kerja & ruang arsip', i:1 },

          { t:'3. Pengembangan Kompetensi', i:0, note:true },
          { t:'3.1. Bukti pelatihan/diklat/bimtek kearsipan (sertifikat, daftar hadir)', i:1 },
          { t:'3.2. Kegiatan sosialisasi internal terkait kearsipan', i:1 },
          { t:'3.3. Pendampingan/mentoring oleh arsiparis/Unit Kearsipan', i:1 },

          { t:'4. Perencanaan & Evaluasi Kinerja', i:0, note:true },
          { t:'4.1. Rencana kerja/tupoksi tahunan petugas kearsipan', i:1 },
          { t:'4.2. Penilaian kinerja berkala & umpan balik perbaikan', i:1 },
          { t:'4.3. Laporan realisasi kegiatan kearsipan unit pengolah', i:1 },

          { t:'5. Sarana Kerja SDM', i:0, note:true },
          { t:'5.1. Akses aplikasi/sistem kearsipan (mis. Srikandi/SIM kearsipan)', i:1 },
          { t:'5.2. Peralatan kerja memadai (komputer, scanner, alat bantu)', i:1 },
          { t:'5.3. APD/pengamanan saat penanganan arsip tersedia (jika perlu)', i:1 },

          { t:'6. Pembinaan & Koordinasi', i:0, note:true },
          { t:'6.1. Bukti koordinasi dengan Unit Kearsipan (undangan/notulen)', i:1 },
          { t:'6.2. Rapat/forum internal kearsipan dilaksanakan berkala', i:1 },

          { t:'7. Kepatuhan & Tindak Lanjut', i:0, note:true },
          { t:'7.1. Kepatuhan SDM terhadap SOP/TND & kebijakan kearsipan', i:1 },
          { t:'7.2. Tindak lanjut atas temuan audit/pengawasan terkait SDM', i:1 },
        ],

        // PRASARANA (baru)
        prasaranaArsip: [
          { t:'1. Gedung', i:0, note:true },
          { t:'1.1. Lokasi aman (bebas banjir/ancaman lingkungan) & akses darurat memadai', i:1 },
          { t:'1.2. Struktur bangunan/atap/dinding/lantai layak & tidak lembab', i:1 },
          { t:'1.3. Instalasi listrik aman & tertata (MCB/grounding/penangkal petir)', i:1 },

          { t:'2. Gudang/Ruang Simpan Arsip', i:0, note:true },
          { t:'2.1. Ruang khusus arsip (tidak tercampur fungsi lain), akses terbatas', i:1 },
          { t:'2.2. Ventilasi/AC menjaga suhu & kelembaban terkendali', i:1 },
          { t:'2.3. Pencahayaan cukup & aman, lampu terproteksi', i:1 },
          { t:'2.4. Penandaan zona/lokasi simpan (shelf/location index)', i:1 },

          { t:'3. Rak & Perlengkapan Penyimpanan', i:0, note:true },
          { t:'3.1. Rak besi anti karat/powder coating, kokoh', i:1 },
          { t:'3.2. Jarak rak ke dinding/lantai/atap sesuai standar', i:1 },
          { t:'3.3. Jarak lorong antar rak memadai untuk mobilitas', i:1 },
          { t:'3.4. Boks arsip & map standar, pallet/alas tersedia', i:1 },
          { t:'3.5. Perlengkapan bantu: troli, tangga dorong, pengikat', i:1 },

          { t:'4. Filing Cabinet/Laci Arsip Aktif', i:0, note:true },
          { t:'4.1. Kondisi laci baik, label jelas, pengunci berfungsi', i:1 },

          { t:'5. Peralatan Pengendali Lingkungan', i:0, note:true },
          { t:'5.1. Thermo-hygrometer tersedia & pencatatan berkala', i:1 },
          { t:'5.2. AC/dehumidifier/air purifier sesuai kebutuhan', i:1 },
          { t:'5.3. UPS/genset untuk perangkat vital (bila perlu)', i:1 },

          { t:'6. Keamanan & Keselamatan', i:0, note:true },
          { t:'6.1. APAR laik & inspeksi berkala; larangan merokok jelas', i:1 },
          { t:'6.2. Detektor asap/early warning; CCTV/akses terbatas', i:1 },
          { t:'6.3. Jalur evakuasi & rambu keselamatan tersedia', i:1 },

          { t:'7. Kebersihan & Pemeliharaan', i:0, note:true },
          { t:'7.1. Jadwal kebersihan (vacuum HEPA, pembersihan berkala)', i:1 },
          { t:'7.2. Pengendalian hama (pest control) terjadwal', i:1 },
          { t:'7.3. Log pemeliharaan sarpras terdokumentasi', i:1 },

          { t:'8. Aksesibilitas & Ergonomi', i:0, note:true },
          { t:'8.1. Meja kerja/meja baca & area kerja ergonomis', i:1 },
          { t:'8.2. Ketinggian rak aman (tidak berlebih) & alat bantu angkat', i:1 },
        ],

        jawaban: ['A','B','C','D','E','N/A'],
      },

      rows: {
        kesesuaian: [],
        penerimaan: [],
        ketentuan: [],
        penggunaanArsip: [],
        pemeliharaanArsip: [],
        penyusutanArsip: [],
        sdmPengolah: [],
        prasaranaArsip: [], // DITAMBAHKAN
      },

      auditPenggunaan:   { tanggal:'', tim:'' },
      auditPemeliharaan: { tanggal:'', tim:'' },
      auditPenyusutan:   { tanggal:'', tim:'' },
      auditSDM:          { tanggal:'', tim:'' },
      auditPrasarana:    { tanggal:'', tim:'' }, // DITAMBAHKAN

      removeRow(section, id){
        this.rows[section] = this.rows[section].filter(r => r.id !== id);
      },
      recalc(row){
        const b = Number(row.bobot || 0);
        const n = Number(row.nilai || 0);
        const p = (b * n) / 100;
        if (!Number.isNaN(p)) row.persen = Number(p.toFixed(2));
      },

      bulk: { open:false, section:null, selected:{}, search:'' },
      openBulk(section){ this.bulk.open=true; this.bulk.section=section; this.bulk.search=''; this.bulk.selected={}; },
      filteredBulkOptions(){
        const sec=this.bulk.section; const q=(this.bulk.search||'').toLowerCase();
        const opts=this.options[sec]||[]; return q?opts.filter(o=> (o.t||o).toLowerCase().includes(q)) : opts;
      },
      toggleBulk(opt,val){ this.bulk.selected[opt]=!!val; },
      bulkSelectAll(){ this.filteredBulkOptions().forEach(opt=>this.bulk.selected[opt]=true); },
      bulkClear(){ Object.keys(this.bulk.selected).forEach(k=>this.bulk.selected[k]=false); },
      confirmBulk(){ this.bulk.open=false; },
      labelSection(sec){
        return sec==='kesesuaian' ? 'Kesesuaian'
             : sec==='penerimaan' ? 'Penerimaan Arsip'
             : sec==='ketentuan'  ? 'Ketentuan Tambahan Nilai'
             : '-';
      },

      init(){
        this.rows.kesesuaian        = this.options.kesesuaian.map(p => makeRow(p));
        this.rows.penerimaan        = this.options.penerimaan.map(p => makeRow(p));
        this.rows.ketentuan         = this.options.ketentuan.map(p => makeRow(p));
        this.rows.penggunaanArsip   = this.options.penggunaanArsip.map(q => makeRow(q.t, q.i||0, !!q.note));
        this.rows.pemeliharaanArsip = this.options.pemeliharaanArsip.map(q => makeRow(q.t, q.i||0, !!q.note));
        this.rows.penyusutanArsip   = this.options.penyusutanArsip.map(q => makeRow(q.t, q.i||0, !!q.note));
        this.rows.sdmPengolah       = this.options.sdmPengolah.map(q => makeRow(q.t, q.i||0, !!q.note));
        this.rows.prasaranaArsip    = this.options.prasaranaArsip.map(q => makeRow(q.t, q.i||0, !!q.note)); // DITAMBAHKAN
      },
    }
  }
</script>
