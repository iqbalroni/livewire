<?php

namespace App\Http\Livewire\Guru;

use Livewire\Component;
use App\Models\GuruModels;

class GuruIndex extends Component
{

    protected $listeners = [
        'TambahGuru' => 'HandleMessage'
    ];

    public function render()
    {
        return view('livewire.guru.guru-index', [
            'guru' => GuruModels::get(),
        ])->layout('guru');
    }

    public function HandleMessage($key)
    {
        session()->flash('pesan', 'Data Guru ' . $key . ' Berhasil Di Tambahkan');
    }
}
