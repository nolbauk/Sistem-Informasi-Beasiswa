<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prestasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_calon',
        'nama_prestasi',
        'jenis_prestasi',
        'tanggal_prestasi',
    ];
    public function Calon()
    {
        return $this->belongsTo(calon_penerima_beasiswa::class, 'id_calon');
    }
}
