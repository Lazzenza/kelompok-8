<?php

namespace App\Livewire;

use App\Models\Mobil;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class MobilComponentPelanggan extends Component
{
    use WithPagination, WithoutUrlPagination, WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public $addPage, $editPage = false;
    public $nopolisi, $merk, $jenis, $kapasitas, $harga, $foto, $id;
    public function render()
    {
        $data['mobil'] = Mobil::paginate(10);
        return view('livewire.mobil-component-pelanggan', $data)
        ->layout('layout.template-pelanggan');
    }
    public function create()
    {
        $this->addPage = true;
    }
}
