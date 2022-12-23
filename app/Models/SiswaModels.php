<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SiswaModels extends Model
{
    protected $table = 'siswa';
    protected $guard = 'id';
    public $timestamps = false;
}
