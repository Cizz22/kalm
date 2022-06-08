<?php

namespace App\Http\Controllers\Jurnal;

use App\Http\Controllers\Controller;
use App\Models\DraftJurnal;
use App\Models\Jurnal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JurnalController extends Controller
{
    public function index()
    {
        $jurnalAll = Jurnal::paginate(5);
        $jurnal = Jurnal::first();
        return view('pages.jurnal.index', compact(['jurnalAll', 'jurnal']));
    }


    public function save(Request $request)
    {
        $judul = $request->judul;
        $konten = $request->konten;

        $jurnal = Jurnal::create([
            'user_id' => Auth::id(),
            'judul' => $judul,
            'template_id' => 1
        ]);

        DraftJurnal::create([
            'konten' => $konten,
            'jurnal_id' => $jurnal->id
        ]);

        return redirect()->route('jurnal.index');
    }

    public function jurnal($id)
    {
        $jurnal = Jurnal::find($id);
        return view('pages.jurnal.open', compact('jurnal'));
    }
}
