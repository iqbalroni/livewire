<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Guru\GuruIndex;
use App\Http\Livewire\Siswa\SiswaIndex;

Route::get('/siswa', SiswaIndex::class);
Route::get('/guru', GuruIndex::class);
