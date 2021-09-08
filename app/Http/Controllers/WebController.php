<?php

namespace App\Http\Controllers;

use App\Dokumen;
use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function formulir()
    {
        $data = Dokumen::all();
        //dd($data);

        return view('website.formulir', compact('data'));
    }

    public function lihat($file)
    {

        //$file = Crypt::decrypt($file);
        // Force download of the file
        $this->file_to_download   = 'file_dokumen/' . $file;
        //return response()->streamDownload(function () {
        //    echo file_get_contents($this->file_to_download);
        //}, $file.'.pdf');
        return response()->file($this->file_to_download);
    }
}
