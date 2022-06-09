<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Konsultasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index(){

        if(Auth::user()->tipeakun="PATIENT"){
            $konsultasi = Auth::user()->konsultasi;
            $patient = true;
        }else{
            $konsultasi = Konsultasi::where('psikolog_id', Auth::id());
            $patient = false;
        }

        $meditasi = session('meditasi');

        return view('pages.landing-page.home', compact(['konsultasi', 'meditasi', 'patient']));
    }

}
