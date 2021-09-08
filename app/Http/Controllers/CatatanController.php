<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataPelaporan;
use App\CatatanPelaporan;
use App\CatatanPelaporanManual;
use App\ManualPelaporan;
use Illuminate\Support\Facades\Crypt;

class CatatanController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store($id, Request $request)
    {
        $this->validate($request, [
            'status' => 'required',
            'catatan' => 'required',
        ]);
        //update Data Pelaporan
        $update = DataPelaporan::find($id);
        if ($request->status == 4) {
            # code...
            $update->status = 2;
        } else {
            $update->status = 1;
        }
        $update->save();

        //simpan catatan
        $catatan = new CatatanPelaporan;
        $catatan->data_pelaporan_id = $id;
        $catatan->status = $request->status;
        $catatan->catatan = $request->catatan;
        $catatan->save();

        $id = Crypt::encrypt($id);
        return redirect("/laporan/detail/$id");
    }

    public function manualstore($id, Request $request)
    {
        $this->validate($request, [
            'status' => 'required',
            'catatan' => 'required',
        ]);
        //update Data Pelaporan
        $update = ManualPelaporan::find($id);
        if ($request->status == 4) {
            # code...
            $update->status = 2;
        } else {
            $update->status = 1;
        }
        $update->save();

        //simpan catatan
        $catatan = new CatatanPelaporanManual;
        $catatan->manual_pelaporan_id = $id;
        $catatan->status = $request->status;
        $catatan->catatan = $request->catatan;
        $catatan->save();

        $id = Crypt::encrypt($id);
        return redirect("/laporan/manual/detail/$id");
    }
}
