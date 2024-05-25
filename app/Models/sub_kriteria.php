<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sub_kriteria extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_kriteria',
        'sub_kriteria',
        'nilai_sub_kriteria',
    ];
}
