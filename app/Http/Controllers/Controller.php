<?php

namespace App\Http\Controllers;

use App\Models\calon_penerima_beasiswa;
use App\Models\prestasi;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

abstract class Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function dashboard()
    {
        $data_calon = Calom::get()->count();
        return view('dashboard', compact( 'data_calon'));
    }
}
