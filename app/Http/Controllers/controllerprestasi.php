<?php

namespace App\Http\Controllers;

use App\Models\prestasi;
use App\Models\calon_penerima_beasiswa;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class controllerprestasi extends Controller
{
    public function index(){
        $data = prestasi::where('id', 'LIKE', '%'.request()->search.'%')->get();
        return view('prestasi/prestasiindex', compact('data'));
    }

    public function add(){
        $data_calon = calon_penerima_beasiswa::get();
        return view('prestasi/prestasicreate', compact('data_calon'));
    }

    public function insertdata(Request $request){
        prestasi::create($request->all());
        return redirect()->route('prestasiindex');
    }

    public function readdata($id){
        $data = prestasi::find($id);
        $data_calon = calon_penerima_beasiswa::get();
        return view('prestasi/prestasiedit' , compact('data', 'data_calon'));
    }

    public function alldata($id){
        $data = prestasi::find($id);
        $data_calon = calon_penerima_beasiswa::get();
        return view('prestasi/prestasidata' , compact('data', 'data_calon'));
    }

    public function updatedata(Request $request, $id){
        $data = prestasi::find($id);
        $data->update($request->all());
        return redirect()->route('prestasiindex');
    }

    public function deletedata($id){
        $data = prestasi::find($id);
        $data->delete();
        return redirect()->route('prestasiindex');
    }

    public function exportpdf(){
        $data = prestasi::all();
        $PDF = PDF::loadView('prestasi/prestasireport', array('data' => $data));
        return $PDF->stream('prestasireport.pdf');
    }
}
