<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peristiwa;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;

class PeristiwaController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        session()->put('halaman', 'master');

        $data = Peristiwa::all();

        return view('peristiwa', ['peristiwa' => $data]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        $peristiwa = new Peristiwa();
        $peristiwa->nama = $request->nama;
        $peristiwa->deskripsi = $request->deskripsi;
        $peristiwa->save();

        return redirect('/peristiwa');
    }

    public function edit($id)
    {

        $id = Crypt::decrypt($id);
        $peristiwa = Peristiwa::find($id);

        return view('peristiwa_edit', ['data' => $peristiwa]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        $peristiwa = Peristiwa::find($id);
        $peristiwa->nama = $request->nama;
        $peristiwa->deskripsi = $request->deskripsi;
        $peristiwa->save();

        $request->session()->flash('sukses', 'Data berhasil diupdate');
        return redirect('/peristiwa');
    }

    public function delete($id)
    {
        $id = Crypt::decrypt($id);
        $pelaporan = Peristiwa::find($id);

        $pelaporan->delete();

        Session::flash('sukses', 'Data berhasil dihapus');
        return redirect()->back();
    }
}
