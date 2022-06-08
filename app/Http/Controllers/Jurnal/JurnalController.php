<?php

namespace App\Http\Controllers\Jurnal;

use App\Http\Controllers\Controller;
use App\Models\Jurnal;
use Carbon\Carbon;
use Illuminate\Http\Request;

class JurnalController extends Controller
{
    public function index(){
        $jurnalAll = Jurnal::all();
        $jurnal = Jurnal::first();
        return view('pages.jurnal.index', compact(['jurnalAll', 'jurnal']));
    }


    public function save(Request $request){
        $judul = $request->judul;
        $konten = $request->konten;
    }

    public function jurnal($slug){
        $jurnal = Jurnal::where('slug', $slug)->first();
        return view('pages.jurnal.open');
    }
}
