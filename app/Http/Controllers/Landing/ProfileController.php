<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        $favouriteSong = Auth::user()->laguFavorit;
        $psikolog = Auth::user()->psikologFavorit;

        return view('pages.landing-page.profile', compact(['favouriteSong', 'psikolog']));
    }
}
