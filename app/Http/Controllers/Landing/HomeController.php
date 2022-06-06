<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Konsultasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index(){
        $konsultasi = Auth::user()->konsultasi;
        $meditasi = session('meditasi');

        return view('pages.landing-page.home', compact(['konsultasi', 'meditasi']));
    }

}
