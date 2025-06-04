<div class="container mt-4">
    <h3>Detail Mobil</h3>
    <div class="container mt-4">
        <div class="row align-items-center">
            <!-- Kolom Gambar -->
            <div class="col-md-4">
                <img src="{{ asset('storage/mobil/' . $mobil->foto) }}" alt="{{ $mobil->merk }}" class="img-fluid rounded" style="max-width: 100%; height: auto;">
            </div>

            <!-- Kolom Deskripsi -->
            <div class="col-md-8 d-flex align-items-center">
                <div>
                    <h3>Detail Mobil</h3>
                    <p><strong>Merk:</strong> {{ $mobil->merk }}</p>
                    <p><strong>Jenis:</strong> {{ $mobil->jenis }}</p>
                    <p><strong>Harga/Hari:</strong> Rp{{ number_format($mobil->harga) }}</p>
                </div>
            </div>
        </div>
    </div>

    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <h4>Form Pemesanan</h4>

    {{-- Notifikasi sukses --}}
    @if ($success)
        <div class="alert alert-success">
            Pemesanan berhasil! Terima kasih.
        </div>
    @endif

    <form wire:submit.prevent="simpan">
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" class="form-control" wire:model="nama">
            @error('nama') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label>Ponsel</label>
            <input type="text" class="form-control" wire:model="ponsel">
            @error('ponsel') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea class="form-control" wire:model="alamat"></textarea>
            @error('alamat') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label>Lama Sewa (hari)</label>
            <input type="number" class="form-control" wire:model="lama" min="1">
            @error('lama') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label>Tanggal Pesan</label>
            <input type="date" class="form-control" wire:model="tgl_pesan">
            @error('tgl_pesan') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-success">Pesan Sekarang</button>
    </form>
</div>
