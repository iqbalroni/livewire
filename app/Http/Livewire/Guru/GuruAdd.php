<?php

namespace App\Http\Livewire\Guru;

use App\Models\GuruModels;
use Livewire\Component;

class GuruAdd extends Component
{
    public $nama, $mapel, $kelas, $jurusan;

    protected $rules = [
        'nama' => 'required|unique:guru,nama_guru',
        'mapel' => 'required',
        'kelas' => 'required',
        'jurusan' => 'required',
    ];

    public function updated($databio)
    {
        $this->validateOnly($databio);
    }

    public function simpandata()
    {
        $this->validate();
        GuruModels::insert([
            'nama_guru' => $this->nama,
            'mapel' => $this->mapel,
            'kelas' => $this->kelas,
            'jurusan' => $this->jurusan,
        ]);

        $nama_guru = $this->nama;

        $this->ResetData();

        $this->emit('TambahGuru', $nama_guru);
    }

    public function ResetData()
    {
        $this->nama = null;
        $this->mapel = null;
        $this->kelas = null;
        $this->jurusan = null;
    }

    public function render()
    {
        return view('livewire.guru.guru-add');
    }
}
