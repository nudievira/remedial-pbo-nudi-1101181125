<?php

namespace App\Http\Controllers;

use App\anggota;
use Illuminate\Http\Request;
use illuminate\Support\Facades\DB;


class UserControler extends Controller
{
    public function index (Request $request ){
        $dataanggota = anggota::all();
        return view ('master.user', compact ('dataanggota'));
    }
    public function list(Request $request)
    {
        $data = anggota::select('id', 'nama', 'alamat','tgllhr', 'email', 'nohp')->get();
        $tabel['draw']                 = '1';
        $tabel['recordsTotal']         =  count($data);
        $tabel['recordsFiltered']  =  count($data);
        $tabel['data']                 = $data;
        return json_encode($tabel);
    }
    public function tambah(Request $request)
    {
        return view('master.useradd');
    }
    public function simpan(Request $request)
    {
        $user = new anggota;
        $user->nama = $request->txtnama;
        $user->alamat = $request->txtalamat;
         $user->tgllhr = $request->datetgllhr;
        $user->email = $request->txtemail;
        $user->nohp = $request->txtnohp;
        $user->save();
        $dataanggota = anggota::all();
        return view('master.user', compact('dataanggota'));
    }
    public function edit($id)
    {
        
        $data = anggota::findorfail($id);
        return view('master.useredit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        
        $anggota = new anggota;
        $anggota->where('id', $id)
        ->update([
            'nama' => $request->txtnama,
            'alamat' => $request->txtalamat,
            'tgllhr' => $request->datetgllhr,
            'email' => $request->txtemail,
            'nohp' => $request->txtnohp,
        ]);
        return redirect ('user');
    }

}
