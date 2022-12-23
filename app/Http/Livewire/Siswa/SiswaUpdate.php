<?php

namespace App\Http\Livewire\Siswa;

use App\Models\SiswaModels;
use Livewire\Component;

class SiswaUpdate extends Component
{
    public $nama;
    public $kelas;
    public $jurusan;
    public $id_siswa;

    protected $listeners = [
        'DataSiswa' => 'handleUpdate',
    ];

    protected $rules = [
        'nama' => 'required|min:6|unique:siswa,nama',
        'kelas' => 'required',
        'jurusan' => 'required',
    ];

    public function updated($ganti)
    {
        $this->validateOnly($ganti);
    }

    public function handleUpdate($datas)
    {
        $this->id_siswa = $datas['id'];
        $this->nama = $datas['nama'];
        $this->kelas = $datas['kelas'];
        $this->jurusan = $datas['jurusan'];
    }

    public function editSiswa()
    {
        SiswaModels::where('id', $this->id_siswa)->update([
            'nama' => strtoupper($this->nama),
            'kelas' => $this->kelas,
            'jurusan' => $this->jurusan
        ]);
        $nama = $this->nama;
        $this->ResetField();

        $this->emit('Edit', $nama);
    }

    private function ResetField()
    {
        $this->nama = null;
        $this->kelas = null;
        $this->jurusan = null;
    }

    public function render()
    {
        return view('livewire.siswa.siswa-update');
    }
}
