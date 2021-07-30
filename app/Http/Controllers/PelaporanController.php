<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelaporan;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;

class PelaporanController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        session()->put('halaman', 'master');

        $pelaporan = Pelaporan::all();
        return view('jenis_pelaporan', ['data' => $pelaporan]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'jenis' => 'required',
            'deskripsi' => 'required',
        ]);

        $pelaporan = new Pelaporan;
        $pelaporan->jenis = $request->jenis;
        $pelaporan->deskripsi = $request->deskripsi;
        $pelaporan->save();

        return redirect('/pelaporan');
    }

    public function edit($id)
    {

        $id = Crypt::decrypt($id);
        $pelaporan = Pelaporan::find($id);

        return view('pelaporan_edit', ['data' => $pelaporan]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'jenis' => 'required',
            'deskripsi' => 'required',
        ]);

        $pelaporan = Pelaporan::find($id);
        $pelaporan->jenis = $request->jenis;
        $pelaporan->deskripsi = $request->deskripsi;
        $pelaporan->save();

        $request->session()->flash('sukses', 'Data berhasil diupdate');
        return redirect('/pelaporan');
    }

    public function delete($id)
    {
        $id = Crypt::decrypt($id);
        $pelaporan = Pelaporan::find($id);

        $pelaporan->delete();

        Session::flash('sukses', 'Data berhasil dihapus');
        return redirect()->back();
    }
}
