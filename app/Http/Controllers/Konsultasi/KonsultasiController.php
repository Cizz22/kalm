<?php

namespace App\Http\Controllers\Konsultasi;

use App\Http\Controllers\Controller;
use App\Models\Konsultasi;
use App\Models\PaketKonsultasi;
use App\Models\PsikologFavorite;
use App\Models\SesiKonsultasi;
use App\Models\TopikKonsultasi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KonsultasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topik = TopikKonsultasi::all();
        //$sesi = SesiKonsultasi::all();
        return view('pages.konsultasi.index', compact(['topik']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postSchedule(Request $request)
    {
        $validate = $request->validate(([
            'topik_id' => 'required',
            'schedule' => 'required'
        ]));

        if (empty($request->session()->get('konsultasi'))) {
            $konsultasi = new Konsultasi();
            $konsultasi->fill($validate);
            $request->session()->put('konsultasi', $konsultasi);
        } else {
            $konsultasi = $request->session()->get('konsultasi');
            $konsultasi->fill($validate);
            $request->session()->put('konsultasi', $konsultasi);
        }

        return redirect()->route('konsultasi.psikolog');
    }


    public function psikolog()
    {
        $psikolog = User::where('tipeakun', 'psikolog')->get();
        return view('pages.konsultasi.psikolog', compact('psikolog'));
    }


    public function postPsikolog(Request $request)
    {
        $validate = $request->validate([
            'psikolog_id' => 'required'
        ]);

        if (empty($request->session()->get('konsultasi'))) {
            $konsultasi = new Konsultasi();
            $konsultasi->fill($validate);
            $request->session()->put('konsultasi', $konsultasi);
        } else {
            $konsultasi = $request->session()->get('konsultasi');
            $konsultasi->fill($validate);
            $request->session()->put('konsultasi', $konsultasi);
        }

        redirect()->route('konsultasi.paket');
    }

    public function paket()
    {
        $paket = PaketKonsultasi::all();

        return view('pages.konsultasi.paket', compact('paket'));
    }


    public function postKonsultasi(Request $request)
    {
        $request->validate([
            'paket_id' => 'required'
        ]);

        $voucher = $request->voucher;
        $konsultasi = $request->session()->get('konsultasi');

        $userKonsultasi = Konsultasi::create([
            'user_id' => Auth::user()->id,
            'psikolog_id' => $konsultasi->psikolog_id,
            'paket_id' => $konsultasi->paket_id,
            'topik_id' => $konsultasi->topik_id,
            'sesi_id' => $konsultasi->sesi_id
        ]);

        redirect()->route('konsultasi.checkout', ['konsultasiId' => $userKonsultasi->id])->with('voucher', $voucher);
    }


    public function checkout($konsultasiId)
    {
        $konsultasi = Konsultasi::find($konsultasiId);

        return view('pages.konsultasi.checkout', compact('konsultasi'));
    }

    public function savePsikologFavorit(Request $request){
        $psikolog = $request->all();

        PsikologFavorite::create([
            'user_id' => Auth::user()->id,
            'psikolog_id' => $psikolog
        ]);
    }

    public function searchPsikolog(Request $request){
        $search = $request->search;
    }
}
