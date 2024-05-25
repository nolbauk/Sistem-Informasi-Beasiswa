<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penilaian_alternatif extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_calon',
        'id_kriteria',
        'nilai_penilaian_alternatif',
    ];
}
