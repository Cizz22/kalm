<?php

namespace App\Http\Controllers\Meditasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\MeditationTopic;
use App\Models\LaguMeditasi;
use App\Models\LaguMeditasiFavorite;
use App\Models\User;

class MeditasiController extends Controller
{
    public function index(){
        return view('pages.meditasi.index');
    }
}
