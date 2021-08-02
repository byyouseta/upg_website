<?php

namespace App\Http\Controllers;

use App\DataPelaporan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        session()->put('halaman', 'home');

        $masuk = DataPelaporan::where('status', '=', 0)->count();
        $proses = DataPelaporan::where('status', '=', 1)->count();
        $selesai = DataPelaporan::where('status', '=', 2)->count();
        // dd($masuk, $proses, $selesai);
        return view('home2', compact('masuk', 'proses', 'selesai'));
    }
}
