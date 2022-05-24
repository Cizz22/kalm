<?php

namespace App\Http\Controllers\Jurnal;

use App\Http\Controllers\Controller;
use App\Models\Jurnal;
use Illuminate\Http\Request;

class JurnalController extends Controller
{
    public function index(){
        $jurnalAll = Jurnal::all();
        $jurnal = Jurnal::first();

        return view('pages.jurnal.index', compact(['jurnalAll', 'jurnal']));
    }

    public function search(Request $request){
        $searchResult = $request->search;
    }

    public function save(Request $request){
        $judul = $request->judul;
        $konten = $request->konten;
    }
}
