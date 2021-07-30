<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;

class PenggunaController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        session()->put('halaman', 'users');

        $data = User::all();

        return view('pengguna', ['data' => $data]);
    }

    public function edit($id)
    {

        $id = Crypt::decrypt($id);
        $data = User::find($id);

        return view('pengguna_edit', [
            'data' => $data,
        ]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'nohp' => 'required|unique:users,nohp,except,' . $id,
        ]);

        $user = User::find($id);
        $user->nama = $request->nama;
        $user->nohp = $request->nohp;
        $user->alamat = $request->alamat;
        $user->save();

        $request->session()->flash('sukses', 'Data berhasil diupdate');
        return redirect('/pengguna');
    }

    public function delete($id)
    {
        $id = Crypt::decrypt($id);
        $user = User::find($id);

        $user->delete();

        Session::flash('sukses', 'Data berhasil dihapus');
        return redirect()->back();
    }
}
