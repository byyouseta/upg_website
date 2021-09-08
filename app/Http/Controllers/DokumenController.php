<?php

namespace App\Http\Controllers;

use App\Dokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;


class DokumenController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        session()->put('halaman', 'dokumen');
        //dd($id);
        $data = Dokumen::all();

        return view('dokumen', [
            'data' => $data
        ]);
    }

    public function upload(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|max:50',
            'file' => 'required|mimes:pdf,xls,xlsx|max:2048',

        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
        $random = Str::random(6);
        $extension = $file->getClientOriginalExtension();
        $nama_file = time() . "_" . $random . '.' . $extension;

        //$nama_file = time()."_".$file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'file_dokumen';
        $file->move($tujuan_upload, $nama_file);

        // $gambars = Gambar::find($id);
        // $agenda->materi = $nama_file;
        // $agenda->save();

        $dok = new Dokumen;
        $dok->file = $nama_file;
        $dok->nama = $request->nama;
        $dok->keterangan = $request->keterangan;
        $dok->save();

        return redirect("/dokumen");
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

    public function delete($id)
    {
        $id = Crypt::decrypt($id);
        $dokumen = Dokumen::find($id);

        $dokumen->delete();

        Session::flash('sukses', 'Data berhasil dihapus');
        return redirect()->back();
    }
}
