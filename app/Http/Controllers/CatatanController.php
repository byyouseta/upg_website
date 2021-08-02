<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataPelaporan;
use App\CatatanPelaporan;
use Illuminate\Support\Facades\Crypt;

class CatatanController extends Controller
{
    //
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
}
