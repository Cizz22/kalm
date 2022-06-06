<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){

        return view('pages.auth.login');
    }
    public function forgot(){

        return view('pages.auth.forgot');
    }
}
