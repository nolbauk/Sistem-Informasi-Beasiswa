<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hasil_perangkingan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_calon',
        'hasil',
    ];

    public function Calon()
    {
        return $this->belongsTo(calon_penerima_beasiswa::class, 'id_calon');
    }
}
