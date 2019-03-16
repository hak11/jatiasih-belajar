<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\siswa;

class SiswaController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function index()
    {
        $siswa = siswa::paginate(3);
        return view('siswa.index')
        ->with('siswa',$siswa)
        ->with('id',1);
    }
    public function create()
    {
        return view('siswa/create');
    }
    public function input(Request $request)
    {
        $siswa= new siswa;
            $siswa->nama = $request->nama;
            $siswa->alamat = $request->alamat;
            $siswa->no_telp = $request->no_telp;
        $siswa->save();
        return redirect('/siswa/')->with('sukses','Data Berhasil Di Tambah');
    }
    public function edit($id)
    {
        $siswa = siswa::find($id);
        return view('siswa.edit')
        ->with('siswa', $siswa);
    }
    public function update(Request $request, $id)
    {
        $siswa = siswa::find($id);
        $siswa->update($request->all());
        return redirect('/siswa/')->with('sukses','Data Berhasil Di Update');
    }
    public function delete($id)
    {
        $siswa = siswa::find($id);
        $siswa->delete();
        return redirect('/siswa/')->with('hapus','Data Berhasil Di Hapus');
    }
}
