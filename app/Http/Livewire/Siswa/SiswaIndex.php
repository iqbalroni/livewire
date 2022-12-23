<?php

namespace App\Http\Livewire\Siswa;

use Livewire\Component;
use App\Models\SiswaModels;
use Livewire\WithPagination;

class SiswaIndex extends Component
{
    use WithPagination;

    public $cari = '';

    public $status_update = false;
    protected $listeners = [
        'Tambah' => 'HandleTambah',
        'Edit' => 'HandleEdit'
    ];

    public function render()
    {
        $data = SiswaModels::where('nama', 'like', '%' . $this->cari . '%')
            ->orderBy('id', 'desc')
            ->Simplepaginate(5);
        return view('livewire.siswa.siswa-index', compact(('data')))->layout('siswa');
    }

    public function DeleteSiswa($id)
    {
        SiswaModels::where('id', $id)->delete();
        session()->flash('pesan', 'Data Berhasil Di Hapus');
    }

    public function getDataSiswa($id)
    {
        $datasiswa = SiswaModels::find($id);
        $this->status_update = true;
        $this->emit('DataSiswa', $datasiswa);
    }

    public function HandleEdit($datas)
    {
        $this->status_update = false;
        session()->flash('pesan', 'Berhasil MengUpdate Data' . $datas);
    }

    public function HandleTambah($datas)
    {
        session()->flash('pesan', 'Berhasil Menambahkan Data' . $datas);
    }
}
