<?php

namespace App\Http\Controllers;

use App\Models\hasil_perangkingan;
use App\Models\calon_penerima_beasiswa;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class controllerhasil extends Controller
{
    public function index(){
        $data = hasil_perangkingan::where('id', 'LIKE', '%'.request()->search.'%')->get();
        return view('hasil/hasilindex', compact('data'));
    }

    public function add(){
        $data_calon = calon_penerima_beasiswa::get();
        return view('hasil/hasilcreate', compact('data_calon'));
    }

    public function insertdata(Request $request){
        hasil_perangkingan::create($request->all());
        return redirect()->route('hasilindex');
    }

    public function readdata($id){
        $data = hasil_perangkingan::find($id);
        $data_calon = calon_penerima_beasiswa::get();
        return view('hasil/hasiledit' , compact('data', 'data_calon'));
    }

    public function alldata($id){
        $data = hasil_perangkingan::find($id);
        $data_calon = calon_penerima_beasiswa::get();
        return view('hasil/hasildata' , compact('data', 'data_calon'));
    }

    public function updatedata(Request $request, $id){
        $data = hasil_perangkingan::find($id);
        $data->update($request->all());
        return redirect()->route('hasilindex');
    }

    public function deletedata($id){
        $data = hasil_perangkingan::find($id);
        $data->delete();
        return redirect()->route('hasilindex');
    }

    public function exportpdf(){
        $data = hasil_perangkingan::all();
        $PDF = PDF::loadView('hasil/hasilreport', array('data' => $data));
        return $PDF->stream('hasilreport.pdf');
    }
}
