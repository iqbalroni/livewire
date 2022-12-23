<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruModels extends Model
{
    protected $guard = 'id_guru';
    protected $table = 'guru';
}
