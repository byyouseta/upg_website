<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelaporan;
use App\Penerimaan;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class PenerimaanController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        session()->put('halaman', 'master');

        $data = Pelaporan::all();
        $data2 = Penerimaan::all();
        return view('jenis_penerimaan', ['data' => $data, 'data2' => $data2]);
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'jenis_pelaporan' => 'required',
            // 'jenis_penerimaan' => 'required|unique:penerimaans,jenis,except,id',
            'jenis' => Rule::unique('penerimaans')->where(function ($query) use ($request) {
                return $query->where('pelaporan_id', $request->jenis_pelaporan);
            }),
        ]);
        //dd($request->jenis);

        $penerimaan = new Penerimaan;
        $penerimaan->pelaporan_id = $request->jenis_pelaporan;
        $penerimaan->jenis = $request->jenis;
        $penerimaan->save();

        return redirect('/penerimaan');
    }

    public function edit($id)
    {

        $id = Crypt::decrypt($id);
        $data = Pelaporan::all();
        $data2 = Penerimaan::find($id);

        return view('penerimaan_edit', [
            'data' => $data,
            'penerimaan' => $data2
        ]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'jenis_pelaporan' => 'required',
            'jenis' => Rule::unique('penerimaans')->where(function ($query) use ($request) {
                return $query->where('pelaporan_id', $request->jenis_pelaporan);
            }),
        ]);

        $penerimaan = Penerimaan::find($id);
        $penerimaan->pelaporan_id = $request->jenis_pelaporan;
        $penerimaan->jenis = $request->jenis;
        $penerimaan->save();

        $request->session()->flash('sukses', 'Data berhasil diupdate');
        return redirect('/penerimaan');
    }

    public function delete($id)
    {
        $id = Crypt::decrypt($id);
        $penerimaan = Penerimaan::find($id);

        $penerimaan->delete();

        Session::flash('sukses', 'Data berhasil dihapus');
        return redirect()->back();
    }
}
