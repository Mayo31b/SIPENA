<div x-data>
  <template x-teleport="body">
    <div x-show="$store.popup.open" x-transition.opacity
         @keydown.window.escape="$store.popup.hide()"
         class="fixed inset-0 z-50 flex items-start justify-center p-4 sm:p-6 md:p-8">

      <div class="absolute inset-0 bg-slate-900/40 backdrop-blur-[1px]"
           @click="$store.popup.hide()"></div>

      <div x-show="$store.popup.open" x-transition
           class="relative w-full max-w-2xl rounded-2xl bg-white shadow-xl ring-1 ring-slate-200">
        <button class="absolute right-2.5 top-2.5 inline-flex h-8 w-8 items-center justify-center rounded-full text-slate-500 hover:bg-slate-100"
                @click="$store.popup.hide()" aria-label="Tutup">&times;</button>

        <div class="p-5 sm:p-6">
          <div class="text-[13px] text-slate-600 mb-4">
            <span class="font-medium">Nama Komponen:</span>
            <span x-text="$store.popup.data.komponen || '—'"></span>
            <span class="text-slate-400">(opsional)</span>
          </div>

          <form action="#" method="POST" class="space-y-4">
            @csrf
            <div>
              <label class="block text-[12px] font-medium text-slate-600 mb-1">Link Bukti (Wajib):</label>
              <textarea name="link_bukti" required placeholder="https://drive.google.com/..."
                        class="w-full h-28 rounded-xl bg-slate-50 border border-slate-200 px-4 py-3 text-sm text-slate-700
                               placeholder:text-slate-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-sky-300 focus:border-sky-300"></textarea>
            </div>

            <div>
              <label class="block text-[12px] font-medium text-slate-600 mb-1">Judul Dokumen</label>
              <input type="text" name="judul" placeholder="Contoh: Laporan Evaluasi 2024"
                     class="w-full h-10 rounded-xl border border-slate-200 bg-white px-4 text-sm
                            placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-sky-300 focus:border-sky-300">
            </div>

            <div>
              <label class="block text-[12px] font-medium text-slate-600 mb-1">Link Dokumen</label>
              <input type="url" name="link_dokumen" placeholder="https://drive.google.com/..."
                     class="w-full h-10 rounded-xl border border-slate-200 bg-white px-4 text-sm
                            placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-sky-300 focus:border-sky-300">
            </div>

            <div class="pt-1 flex items-center gap-3">
              <button type="submit"
                      class="inline-flex items-center justify-center rounded-xl bg-teal-500 px-4 h-10 text-white text-sm font-medium hover:bg-teal-600 transition">
                Tambah Data
              </button>
              <button type="button"
                      class="inline-flex items-center justify-center rounded-xl bg-slate-100 px-4 h-10 text-slate-700 text-sm font-medium ring-1 ring-slate-200 hover:bg-slate-200 transition"
                      @click="$store.popup.hide()">
                Tutup
              </button>
            </div>

            <p class="text-[11px] text-slate-400 pt-1">
              Catatan: Jika modal ditutup, perubahan nilai hanya dapat dilakukan oleh Admin DISPERKA / Penilai.
            </p>
          </form>
        </div>
      </div>
    </div>
  </template>
</div>
