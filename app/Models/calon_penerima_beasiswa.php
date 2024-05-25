<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class calon_penerima_beasiswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_calon',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'email',
        'agama',
        'penghasilan',
        'nilai_tes',
    ];
}
