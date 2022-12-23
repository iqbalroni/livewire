<?php

namespace App\Http\Livewire\Siswa;

use Livewire\Component;
use App\Models\SiswaModels;

class SiswaAdd extends Component
{
    public $nama;
    public $kelas;
    public $jurusan;

    protected $rules = [
        'nama' => 'required|min:6|unique:siswa,nama',
        'kelas' => 'required',
        'jurusan' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function simpan()
    {
        $this->validate();
        SiswaModels::insert([
            'nama' => strtoupper($this->nama),
            'kelas' => $this->kelas,
            'jurusan' => $this->jurusan
        ]);

        $datas = $this->nama;

        $this->ResetField();

        $this->emit('Tambah', $datas);
    }

    private function ResetField()
    {
        $this->nama = null;
        $this->kelas = null;
        $this->jurusan = null;
    }

    public function render()
    {
        return view('livewire.siswa.siswa-add');
    }
}
