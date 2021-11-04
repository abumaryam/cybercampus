<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataku extends Model
{
    use HasFactory;

    public function semuaData()
    {
        return 'Prodi Sistem Informasi';
    }
}
