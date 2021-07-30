<?php

namespace App\Http\Controllers;

use App\Pelaporan;
use App\Penerimaan;
use App\Peristiwa;
use App\User;
use App\DataPelaporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PelaporController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profil()
    {
        session()->put('halaman', 'pengaturan_pengguna');

        return view('profile');
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'nohp' => 'required|unique:users,nohp,' . $id,
        ]);
        $update = User::find($id);
        $update->name = $request->nama;
        $update->alamat = $request->alamat;
        $update->nohp = $request->nohp;
        $update->save();

        Session::flash('sukses', 'Data berhasil diperbaharui');

        return redirect('/profil');
    }

    public function password()
    {
        session()->put('halaman', 'pengaturan_pengguna');

        return view('password');
    }

    public function passupdate($id, Request $request)
    {
        $user = User::findOrFail($id);

        /*
        * Validate all input fields
        */
        $this->validate($request, [
            'old_password' => 'required',
            'password' => 'required|confirmed|min:6|different:old_password',
        ]);

        if (Hash::check($request->old_password, $user->password)) {
            $user->fill([
                'password' => Hash::make($request->password)
            ])->save();

            $request->session()->flash('sukses', 'Password berhasil diubah');
            return redirect('/password');
        } else {
            $request->session()->flash('error', 'Password lama tidak sama dengan didata');
            return redirect('/password');
        }
    }

    public function lapor()
    {
        session()->put('halaman', 'lapor');

        $data = Pelaporan::all();
        $data2 = Peristiwa::all();

        return view('lapor', [
            'data' => $data,
            'data2' => $data2
        ]);
    }

    // Fetch records
    public function getPenerimaan(Request $request)
    {

        // Fetch Employees by Departmentid
        $penerimaan = Penerimaan::where('pelaporan_id', $request->get('id'))
            ->pluck('jenis', 'id');

        return response()->json($penerimaan);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            //pelapor
            //'nama' => 'required',
            'tempat_lahir' => 'required',
            'instansi' => 'required',
            'jabatan' => 'required',
            'alamat_kantor' => 'required',
            'telp_kantor' => 'required',
            'ktp'   => 'required',
            'tgl_lahir' => 'required',
            'unit' => 'required',
            //'email' => 'required|email',
            //'alamat' => 'required',
            //'nohp' => 'required|number',
            //data penerimaan
            'jenis_pelaporan' => 'required',
            'peristiwa' => 'required',
            'jenis_penerimaan' => 'required',
            'tempat_terima' => 'required',
            'tgl_terima' => 'required',
            'uraian_peristiwa' => 'required',
            'nilai' => 'required',
            'lainnya' => 'required',
            //data pemberi
            'nama_pemberi' => 'required',
            'alamat_pemberi' => 'required',
            'nohp_pemberi' => 'required',
            'pekerjaan' => 'required',
            'email_pemberi' => 'required|email',
            'hubungan' => 'required',
            //alasan kronologi
            'alasan' => 'required',
            'dokumen' => 'required',
            'kronologi' => 'required',
            'catatan' => 'required',
            'file_bukti' => 'required|mimes:jpeg,jpg|max:2048',

        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file_bukti');
        $random = Str::random(12);
        $extension = $file->getClientOriginalExtension();
        $nama_file = time() . "_" . $random . '.' . $extension;

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'bukti';
        $file->move($tujuan_upload, $nama_file);

        //ubah tanggal
        $tgl_lahir = \Carbon\Carbon::parse($request->tgl_lahir)->format('Y-m-d');
        $tgl_terima = \Carbon\Carbon::parse($request->tgl_terima)->format('Y-m-d');

        $lapor = new DataPelaporan;
        $lapor->file_bukti = $nama_file;
        $lapor->user_id = Auth::user()->id;
        $lapor->tempat_lahir = $request->tempat_lahir;
        $lapor->instansi = $request->instansi;
        $lapor->jabatan = $request->jabatan;
        $lapor->alamat_kantor = $request->alamat_kantor;
        $lapor->telp_kantor = $request->telp_kantor;
        $lapor->ktp = $request->ktp;
        $lapor->tgl_lahir = $tgl_lahir;
        $lapor->unit = $request->unit;
        $lapor->pelaporan_id = $request->jenis_pelaporan;
        $lapor->peristiwa_id = $request->peristiwa;
        $lapor->penerimaan_id = $request->jenis_penerimaan;
        $lapor->tempat_terima = $request->tempat_terima;
        $lapor->tgl_terima = $tgl_terima;
        $lapor->uraian_peristiwa = $request->uraian_peristiwa;
        $lapor->nilai = $request->nilai;
        $lapor->lainnya = $request->lainnya;
        $lapor->nama_pemberi = $request->nama_pemberi;
        $lapor->alamat_pemberi = $request->alamat_pemberi;
        $lapor->nohp_pemberi = $request->nohp_pemberi;
        $lapor->pekerjaan = $request->pekerjaan;
        $lapor->email_pemberi = $request->email_pemberi;
        $lapor->hubungan = $request->hubungan;
        $lapor->alasan = $request->alasan;
        $lapor->dokumen = $request->dokumen;
        $lapor->kronologi = $request->kronologi;
        $lapor->catatan = $request->catatan;
        $lapor->status = 0;
        $lapor->save();

        return redirect("/history/pelaporan");
    }

    public function history()
    {
        session()->put('halaman', 'history_laporan');

        $data = DataPelaporan::where('user_id', '=', Auth::user()->id)->get();
        // dd($data);
        return view('history_laporan', ['data' => $data]);
    }

    public function detaillapor($id)
    {
        $id = Crypt::decrypt($id);

        $data = DataPelaporan::find($id);
        //dd($data);
        return view('detail_lapor', ['data' => $data]);
    }
}
