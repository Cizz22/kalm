<?php

namespace App\Http\Controllers\Meditasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\MeditationTopic;
use App\Models\LaguMeditasi;
use App\Models\LaguMeditasiFavorite;
use App\Models\User;

use function PHPUnit\Framework\isEmpty;

class MeditasiController extends Controller
{

    public function index(){
        $lagu = LaguMeditasi :: all();
        $fav = Auth::User()-> laguFavorit;
        $lagumeditasi1 = $lagu -> first();
        return view('pages.meditasi.index', compact(['lagu', 'fav', 'lagumeditasi1']));
    }

    public function open($id){
        $lagumeditasi = LaguMeditasi::find($id);
        $userfav = Auth::user()->laguFavorit;

        if($userfav->isEmpty()){  //user tidak memfavoritkan apa2
            $fav = false;
        }else{
            if($userfav->where('lagu_id', $id)){ //cari spesifik lagu di favorit, tiap lagu idnya beda2
                $fav = true;
            }else{
                $fav = false; //kalo misal lagu nya gaada di lagu favorit, berarti lagu bukan favorit user
            }
        }
        return view('pages.meditasi.open', compact(['lagumeditasi','fav']));
    }

    public function saveFavourite($id){
        $fav = LaguMeditasiFavorite :: where('lagu_id', $id) -> first();
        if (!$fav) {
             LaguMeditasiFavorite::create([
                'user_id' => Auth::user()->id,
                'lagu_id' => $id
            ]);
        }else {
            $fav -> delete();
        }
        return redirect() -> route('meditasi.open', $id);
    }
}
