<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Mobil;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;

class FormPesanMobil extends Component
{
    public $mobilId;
    public $mobil;
    public $nama, $ponsel, $alamat, $lama, $tgl_pesan;

    public function mount($mobilId)
    {
        $this->mobilId = $mobilId;
        $this->mobil = Mobil::findOrFail($mobilId);
    }

    public $success = false;

    public function simpan()
    {
        $this->validate([
            'nama' => 'required|string|max:255',
            'ponsel' => 'required|string|max:20',
            'alamat' => 'required|string',
            'lama' => 'required|integer|min:1',
            'tgl_pesan' => 'required|date',
        ]);

        Transaksi::create([
            'user_id' => Auth::id(),
            'mobil_id' => $this->mobilId,
            'nama' => $this->nama,
            'ponsel' => $this->ponsel,
            'alamat' => $this->alamat,
            'lama' => $this->lama,
            'tgl_pesan' => $this->tgl_pesan,
            'total' => $this->mobil->harga * $this->lama,
            'status' => 'WAIT',
        ]);

        // set flag sukses supaya notif muncul
        $this->success = true;

        // kosongkan input form
        $this->reset(['nama', 'ponsel', 'alamat', 'lama', 'tgl_pesan']);
    }


    public function render()
    {
        return view('livewire.form-pesan-mobil')->layout('layout.template-pelanggan');
    }
}
