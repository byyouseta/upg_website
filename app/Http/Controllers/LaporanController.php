<?php

namespace App\Http\Controllers;

use App\CatatanPelaporan;
use Illuminate\Http\Request;
use App\DataPelaporan;
use Illuminate\Support\Facades\Crypt;

class LaporanController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        session()->put('halaman', 'pelaporan');
        //dd($id);
        $data = DataPelaporan::all();

        return view('laporan1', [
            'data' => $data
        ]);
    }
    public function masuk()
    {

        $data = DataPelaporan::where('status', '=', 0)->get();

        return view('laporan1', [
            'data' => $data
        ]);
    }

    public function proses()
    {

        $data = DataPelaporan::where('status', '=', 1)->get();

        return view('laporan1', [
            'data' => $data
        ]);
    }

    public function selesai()
    {

        $data = DataPelaporan::where('status', '=', 2)->get();

        return view('laporan1', [
            'data' => $data
        ]);
    }

    public function detail($id)
    {
        $id = Crypt::decrypt($id);

        $data = DataPelaporan::find($id);
        $data2 = CatatanPelaporan::where('data_pelaporan_id', '=', $id)
            ->orderBy('created_at', 'desc')
            ->first();

        return view('detail_laporan', [
            'data' => $data,
            'data2' => $data2
        ]);
    }

    public function bukti($file)
    {
        // Force download of the file
        $this->file_to_download   = 'bukti/' . $file;
        //return response()->streamDownload(function () {
        //    echo file_get_contents($this->file_to_download);
        //}, $file.'.pdf');
        return response()->file($this->file_to_download);
    }
}
