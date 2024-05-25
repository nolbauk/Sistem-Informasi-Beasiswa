<?php

namespace App\Http\Controllers;

use App\Models\calon_penerima_beasiswa;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class controllercalon extends Controller
{
    public function index(){
        $data = calon_penerima_beasiswa::where('nama_calon', 'LIKE', '%'.request()->search.'%')->get();
        return view('calon/calonindex', compact('data'));
    }

    public function add(){
        return view('calon/caloncreate');
    }

    public function insertdata(Request $request){
        calon_penerima_beasiswa::create($request->all());
        return redirect()->route('calonindex');
    }

    public function readdata($id){
        $data = calon_penerima_beasiswa::find($id);
        return view('calon/calonedit' , compact('data'));
    }

    public function alldata($id){
        $data = calon_penerima_beasiswa::find($id);
        return view('calon/calondata' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = calon_penerima_beasiswa::find($id);
        $data->update($request->all());
        return redirect()->route('calonindex');
    }

    public function deletedata($id){
        $data = calon_penerima_beasiswa::find($id);
        $data->delete();
        return redirect()->route('calonindex');
    }

    public function exportpdf(){
        $data = calon_penerima_beasiswa::all();
        $PDF = PDF::loadView('calon/calonreport', array('data' => $data));
        return $PDF->stream('calonreport.pdf');
    }
}
